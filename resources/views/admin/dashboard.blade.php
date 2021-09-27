@extends('layouts.admin')

@section('content')
<!--  BEGIN MAIN CONTAINER  -->
<div class="main-container" id="container">



   <!--  BEGIN CONTENT PART  -->
   <div id="content" class="main-content">
       <div class="layout-px-spacing">

           <div class="page-header">
               <div class="page-title">
                   <h3>Sales Dashboard</h3>
               </div>
               <div class="dropdown filter custom-dropdown-icon">
                   <a class="dropdown-toggle btn" href="#" role="button" id="filterDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="text"><span>Show</span> : Daily Sales</span> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-down"><polyline points="6 9 12 15 18 9"></polyline></svg></a>

                   <div class="dropdown-menu dropdown-menu-right" aria-labelledby="filterDropdown">
                       <a class="dropdown-item" data-value="<span>Show</span> : Daily Sales" href="javascript:void(0);">Daily Sales</a>
                       <a class="dropdown-item" data-value="<span>Show</span> : Weekly Sales" href="javascript:void(0);">Weekly Sales</a>
                       <a class="dropdown-item" data-value="<span>Show</span> : Monthly Sales" href="javascript:void(0);">Monthly Sales</a>
                       <a class="dropdown-item" data-value="Download All" href="javascript:void(0);">Download All</a>
                       <a class="dropdown-item" data-value="Share Statistics" href="javascript:void(0);">Share Statistics</a>
                   </div>
               </div>
           </div>

           <div class="row layout-top-spacing">

               <div class="col-xl-8 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                   <div class="widget widget-chart-one">
                       <div class="widget-heading">
                           <h5 class="">Revenue</h5>
                           <ul class="tabs tab-pills">
                               <li><a href="javascript:void(0);" id="tb_1" class="tabmenu">Monthly</a></li>
                           </ul>
                       </div>

                       <div class="widget-content">
                           <div class="tabs tab-content">
                               <div id="content_1" class="tabcontent">
                                   <div id="revenueMonthly"></div>
                               </div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="col-xl-4 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                   <div class="widget widget-chart-two">
                       <div class="widget-heading">
                           <h5 class="">Sales by Category</h5>
                       </div>
                       <div class="widget-content">
                           <div id="chart-2" class=""></div>
                       </div>
                   </div>
               </div>

               <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                   <div class="widget-two">
                       <div class="widget-content">
                           <div class="w-numeric-value">
                               <div class="w-content">
                                   <span class="w-value">Daily sales</span>
                                   <span class="w-numeric-title">Go to columns for details.</span>
                               </div>
                               <div class="w-icon">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-dollar-sign"><line x1="12" y1="1" x2="12" y2="23"></line><path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path></svg>
                               </div>
                           </div>
                           <div class="w-chart">
                               <div id="daily-sales"></div>
                           </div>
                       </div>
                   </div>
               </div>

               <div class="col-xl-4 col-lg-6 col-md-6 col-sm-6 col-12 layout-spacing">
                   <div class="widget-three">
                       <div class="widget-heading">
                           <h5 class="">Summary</h5>
                       </div>
                       <div class="widget-content">

                           <div class="order-summary">

                               <div class="summary-list">
                                   <div class="w-icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-bag"><path d="M6 2L3 6v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V6l-3-4z"></path><line x1="3" y1="6" x2="21" y2="6"></line><path d="M16 10a4 4 0 0 1-8 0"></path></svg>
                                   </div>
                                   <div class="w-summary-details">

                                       <div class="w-summary-info">
                                           <h6>Income</h6>
                                           <p class="summary-count">$92,600</p>
                                       </div>

                                       <div class="w-summary-stats">
                                           <div class="progress">
                                               <div class="progress-bar bg-gradient-secondary" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                                           </div>
                                       </div>

                                   </div>

                               </div>

                               <div class="summary-list">
                                   <div class="w-icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-tag"><path d="M20.59 13.41l-7.17 7.17a2 2 0 0 1-2.83 0L2 12V2h10l8.59 8.59a2 2 0 0 1 0 2.82z"></path><line x1="7" y1="7" x2="7" y2="7"></line></svg>
                                   </div>
                                   <div class="w-summary-details">

                                       <div class="w-summary-info">
                                           <h6>Profit</h6>
                                           <p class="summary-count">$37,515</p>
                                       </div>

                                       <div class="w-summary-stats">
                                           <div class="progress">
                                               <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                                           </div>
                                       </div>

                                   </div>

                               </div>

                               <div class="summary-list">
                                   <div class="w-icon">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect><line x1="1" y1="10" x2="23" y2="10"></line></svg>
                                   </div>
                                   <div class="w-summary-details">

                                       <div class="w-summary-info">
                                           <h6>Expenses</h6>
                                           <p class="summary-count">$55,085</p>
                                       </div>

                                       <div class="w-summary-stats">
                                           <div class="progress">
                                               <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                           </div>
                                       </div>

                                   </div>

                               </div>

                           </div>

                       </div>
                   </div>
               </div>

               <div class="col-xl-4 col-lg-12 col-md-6 col-sm-12 col-12 layout-spacing">
                   <div class="widget-one">
                       <div class="widget-content">
                           <div class="w-numeric-value">
                               <div class="w-icon">
                                   <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart"><circle cx="9" cy="21" r="1"></circle><circle cx="20" cy="21" r="1"></circle><path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path></svg>
                               </div>
                               <div class="w-content">
                                   <span class="w-value">3,192</span>
                                   <span class="w-numeric-title">Total Orders</span>
                               </div>
                           </div>
                           <div class="w-chart">
                               <div id="total-orders"></div>
                           </div>
                       </div>
                   </div>
               </div>



               <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing">
                   <div class="widget widget-table-two">

                       <div class="widget-heading">
                           <h5 class="">Recent Orders</h5>
                       </div>

                       <div class="widget-content">
                           <div class="table-responsive">
                               <table class="table">
                                   <thead>
                                       <tr>
                                           <th><div class="th-content">Customer</div></th>
                                           <th><div class="th-content">Product</div></th>
                                           <th><div class="th-content">Invoice</div></th>
                                           <th><div class="th-content th-heading">Price</div></th>
                                           <th><div class="th-content">Status</div></th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <tr>
                                           <td><div class="td-content customer-name"><img src="assets/img/90x90.jpg" alt="avatar">Andy King</div></td>
                                           <td><div class="td-content product-brand">Nike Sport</div></td>
                                           <td><div class="td-content">#76894</div></td>
                                           <td><div class="td-content pricing"><span class="">$88.00</span></div></td>
                                           <td><div class="td-content"><span class="badge outline-badge-primary">Shipped</span></div></td>
                                       </tr>
                                       <tr>
                                           <td><div class="td-content customer-name"><img src="assets/img/90x90.jpg" alt="avatar">Irene Collins</div></td>
                                           <td><div class="td-content product-brand">Speakers</div></td>
                                           <td><div class="td-content">#75844</div></td>
                                           <td><div class="td-content pricing"><span class="">$84.00</span></div></td>
                                           <td><div class="td-content"><span class="badge outline-badge-success">Paid</span></div></td>
                                       </tr>
                                       <tr>
                                           <td><div class="td-content customer-name"><img src="assets/img/90x90.jpg" alt="avatar">Laurie Fox</div></td>
                                           <td><div class="td-content product-brand">Camera</div></td>
                                           <td><div class="td-content">#66894</div></td>
                                           <td><div class="td-content pricing"><span class="">$126.04</span></div></td>
                                           <td><div class="td-content"><span class="badge outline-badge-danger">Pending</span></div></td>
                                       </tr>
                                       <tr>
                                           <td><div class="td-content customer-name"><img src="assets/img/90x90.jpg" alt="avatar">Luke Ivory</div></td>
                                           <td><div class="td-content product-brand">Headphone</div></td>
                                           <td><div class="td-content">#46894</div></td>
                                           <td><div class="td-content pricing"><span class="">$56.07</span></div></td>
                                           <td><div class="td-content"><span class="badge outline-badge-success">Paid</span></div></td>
                                       </tr>
                                       <tr>
                                           <td><div class="td-content customer-name"><img src="assets/img/90x90.jpg" alt="avatar">Ryan Collins</div></td>
                                           <td><div class="td-content product-brand">Sport</div></td>
                                           <td><div class="td-content">#89891</div></td>
                                           <td><div class="td-content pricing"><span class="">$108.09</span></div></td>
                                           <td><div class="td-content"><span class="badge outline-badge-primary">Shipped</span></div></td>
                                       </tr>
                                       <tr>
                                           <td><div class="td-content customer-name"><img src="assets/img/90x90.jpg" alt="avatar">Nia Hillyer</div></td>
                                           <td><div class="td-content product-brand">Sunglasses</div></td>
                                           <td><div class="td-content">#26974</div></td>
                                           <td><div class="td-content pricing"><span class="">$168.09</span></div></td>
                                           <td><div class="td-content"><span class="badge outline-badge-primary">Shipped</span></div></td>
                                       </tr>
                                       <tr>
                                           <td><div class="td-content customer-name"><img src="assets/img/90x90.jpg" alt="avatar">Sonia Shaw</div></td>
                                           <td><div class="td-content product-brand">Watch</div></td>
                                           <td><div class="td-content">#76844</div></td>
                                           <td><div class="td-content pricing"><span class="">$110.00</span></div></td>
                                           <td><div class="td-content"><span class="badge outline-badge-success">Paid</span></div></td>
                                       </tr>
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>
               </div>

            

           </div>


@endsection
