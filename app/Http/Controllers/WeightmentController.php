<?php

namespace App\Http\Controllers;

use App\Models\Weightment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WeightmentController extends Controller
{


    public function load_weights(Request $request)
    {
        // $users = User::all();

        // return view('admin.users', compact('users'));

        $start_date = !empty($request->input('startdate')) ? Carbon::parse($request->input('startdate'))->format('Y-m-d') : "";
        $end_date   = !empty($request->input('startdate')) ? Carbon::parse($request->input('enddate'))->format('Y-m-d') : "";
        $limit      = $request->input('length');
        $offset     = $request->input('start');
        $column     = $request->input('order.0.column');
        $dir        = $request->input('order.0.dir');
        $order_by   = $request->input("columns.$column.data");

        $query = DB::table('weightments');

        // if (!empty($start_date) && !empty($end_date)) {
        //     $query->whereBetween('created_at', [$start_date, $end_date]);
        // }
        if (!empty($start_date) && !empty($end_date)) {
            $query->whereDate('created_at', '>=', $start_date)
                ->whereDate('created_at', '<=', $end_date);
        }

        if ($search = $request->input('search')) { // .value if using DataTables
            $query->where('weightments.customer_name', 'like', '%' . $search . '%');
        }

         

        // $type = $request->input('type');
        // if (isset($type)) {
        //     $query->where('weightments.is_active', '=', $type);
        // }

        $role = $request->input('search_by_role');
        if (isset($role)) {
            $query->where('roles.id', '=', $role);
        }

        // Calculate total before pagination
        $total_count = $query->count();

        // Apply sorting and pagination
        $query->orderBy($order_by, $dir);
        if ($limit != -1) {
            $query->offset($offset)->limit($limit);
        }

        // Fetch the data
        $users = $query->get();

        

        $all_data = [];
        foreach ($users as $user) {

             

            $btn = '<td class="text-right">';
            // if (Auth::user()->can('update_user')) {
                
            
            // }
            if ($user->second_weight == 0 || $user->second_weight == null) {

                $btn .= '<a href="' . route("second_weight", $user->id) . '" 
                            class="btn btn-primary btn-sm btn-icon" 
                            data-toggle="tooltip" 
                            title="Second Weight" 
                            style="margin-right:3px;">
                            <i class="fa-duotone fa-square-list"></i>
                        </a>';

            } else {

                $btn .= '<span class="badge bg-success" ></span>';
            }

            $btn .= '<button id="view_btn" data-vid="'.$user->id.'" 
                        class="btn btn-success btn-icon btn-sm" 
                        data-toggle="tooltip" 
                        title="View"  >
                        <i class="fa-duotone fa-arrows-to-eye"></i>
                    </button>';
       
      
            $btn .= '</td>';

             
            $all_data[] = [
                'id'                    => $user->id,
                'vehicle_no'            => $user->vehicle_no,
                'customer_name'         => $user->customer_name,
                'supplier_name'         => $user->supplier_name,
                'driver_name'           => $user->driver_name,
                'gate_pass_no'          => $user->gate_pass_no,
                'description'           => $user->description,
                'ist_weight'            => $user->ist_weight, 
                'second_weight'            => $user->second_weight, 
                'net_weight'            => $user->net_weight, 
                'btn'                   => $btn
            ];
        };

        $data = [
            "draw"            => intval($request->input('draw')),
            "recordsTotal"    => $total_count,
            "recordsFiltered" => $total_count,
            "data"            => $all_data, 
        ];

        return response()->json($data);


    }


    public function insert_ist_weight(Request $request)
    {
        
        $user                       = new Weightment();
        $user->vehicle_no           = $request->input('vehicle_no');
        $user->customer_name        = $request->input('cus_name');
        $user->supplier_name        = $request->input('sup_name');
        $user->driver_name          = $request->input('driver_name');
        $user->gate_pass_no         = $request->input('gate_pass_no');
        $user->description          = $request->input('description');
        $user->ist_weight          = $request->input('ist_weight');
        $user->ist_time             = now()->format('H:i:s');
        $user->ist_date             = now()->format('Y-m-d');

        $user->created_by           = Auth::id();

        $user->save();

        return response()->json([
            'status'=>200
        ]);
 
    }


    public function second_weight($id) {

        $weight = Weightment::find($id); 
        return view('admin.second_weight', compact('weight'));


    }


    public function insert_second_weight(Request $request)
    {
        $weight = Weightment::findOrFail($request->id);

        // Net weight calculation
        $net = abs($request->ist_weight - $request->second_weight);

        $weight->update([
            'vehicle_no'     => $request->vehicle_no,
            'customer_name'  => $request->cus_name,
            'supplier_name'  => $request->sup_name,
            'driver_name'    => $request->driver_name,
            'gate_pass_no'   => $request->gate_pass_no,
            'description'    => $request->description,
            'ist_weight'     => $request->ist_weight,
            'second_weight'  => $request->second_weight,
            'net_weight'     => $net,
            'second_time'       => now()->format('H:i:s'),
            'second_date'       => now()->format('Y-m-d'),
        ]);


 

        return response()->json([
            'status' => 200,
            'net_weight' => $net
        ]);
    }


    public function view_invoice($id)
    {
        $weight = DB::table('weightments')->where('id', $id)->first();

        if (!$weight) {
            return response()->json([
                'status' => 404,
                'message' => 'Weight not found'
            ], 404);
        } 

        return response()->json([
            'status' => 200,
            'weight' => $weight, 
        ]);
    }


    public function invoice_print()
    {
        // Fetch the last inserted sale
        $sale = DB::table('sales')
            ->leftJoin('customers', 'sales.cus_id', '=', 'customers.id')
            ->select(
                'sales.*',
                'customers.cus_name',
                'sales.id as sale_id'
            )
            ->orderBy('sales.id', 'desc') // Get the most recent sale
            ->first();

        if (!$sale) {
            return response()->json([
                'status' => 404,
                'message' => 'Sale not found'
            ], 404);
        }

        // Fetch the details for the sale
        $sale_details = DB::table('sale_details')
            ->where('sale_id', $sale->id)
            ->get();

        $products = [];

        foreach ($sale_details as $index => $detail) {
            $product = DB::table('products')
                ->where('id', $detail->pro_id)
                ->first();

            if ($product) {
                $products[] = [
                    'no'        => $index + 1,
                    'pro_id'    => $product->id,
                    'pro_name'  => $product->pro_name,
                    'sale_price'=> $detail->sale_price,
                    'pro_qty'   => $detail->pro_qty,
                    'dis_per'   => $detail->dis_per,
                    'dis_amount'=> $detail->dis_amount,
                    'total'     => $detail->total,
                ];
            }
        }

        return response()->json([
            'status' => 200,
            'sale' => $sale,
            'products' => $products,
        ]);
    }


}
