@extends('layouts.account')
@section('pages')





    <div  id="vendor_dashboard">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="vendor_top_box">
                    <h2>25</h2>
                    <h4>Total Products</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="vendor_top_box">
                    <h2>2552</h2>
                    <h4>Total Sales</h4>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="vendor_top_box">
                    <h2>50</h2>
                    <h4>Order Pending</h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="vendor_order_boxed">
                    <h4>Pending Products</h4>
                    <table class="table pending_table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Product Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Sales</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="row"><img src="assets/img/common/1.jpg" alt=""></td>
                            <td>neck velvet dress</td>
                            <td>$205</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td scope="row"><img src="assets/img/common/1.jpg" alt=""></td>
                            <td>neck velvet dress</td>
                            <td>$205</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td scope="row"><img src="assets/img/common/1.jpg" alt=""></td>
                            <td>neck velvet dress</td>
                            <td>$205</td>
                            <td>1000</td>
                        </tr>
                        <tr>
                            <td scope="row"><img src="assets/img/common/1.jpg" alt=""></td>
                            <td>neck velvet dress</td>
                            <td>$205</td>
                            <td>1000</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="vendor_order_boxed">
                    <h4>Recent Orders</h4>
                    <table class="table pending_table">
                        <thead class="thead-light">
                        <tr>
                            <th scope="col">Order Id</th>
                            <th scope="col">Product Details</th>
                            <th scope="col">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td scope="row">#21515</td>
                            <td>Neck Velvet Dress</td>
                            <td>Confrimed</td>
                        </tr>
                        <tr>
                            <td scope="row">#78153		</td>
                            <td>Belted Trench Coat</td>
                            <td>Shipped</td>
                        </tr>
                        <tr>
                            <td scope="row">#51512		</td>
                            <td>Man Print Tee</td>
                            <td>Pending</td>
                        </tr>
                        <tr>
                            <td scope="row">#78153	</td>
                            <td>	Belted Trench Coat</td>
                            <td>Shipped</td>
                        </tr>
                        <tr>
                            <td scope="row">#78153		</td>
                            <td>Belted Trench Coat</td>
                            <td>Shipped</td>
                        </tr>
                        <tr>
                            <td scope="row">#51512		</td>
                            <td>Man Print Tee</td>
                            <td>Pending</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>





@endsection
