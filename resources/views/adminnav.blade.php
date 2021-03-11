
<nav class="navbar navbar-expand-md navbar-light" style="background-color:#10ac84;height:40px;border-bottom:2px solid white;">

    <a class="navbar-brand text-white pb-2" href="{{url('home/')}}" id="cName"> {{ Auth::user()->cmpname }}</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse  ml-5" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#"></a>
            </li>
            <li class="nav-item dropdown active">
                <a class="nav-link text-white dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Company <span class="sr-only">(current)</span> </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <!-- Company Detail Button with Model  -->
                    <li><a class="dropdown-item" href="{{ url('companyDetails/')}}">Company Details</a></li>
                <!-- Company Detail Button with Model End -->
             
                     <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Security</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Create User</a></li>
                            <!-- <li><a class="dropdown-item" href="#">Submenu0</a></li> -->
                       
                        </ul>
                    </li> 
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link text-white dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Masters  </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="{{ url('accountTree')}}" >Accounts Master</a></li>
                    <li><a class="dropdown-item" href="{{ url('productTree')}}">Product Master</a></li>
                    <li><a class="dropdown-item" href="{{ url('taxes')}}">Taxes</a></li>
                    <li><a class="dropdown-item" href="{{ url('brand')}}">Brand</a></li>
                    <li><a class="dropdown-item" href="{{ url('size')}}">Size</a></li>
                    <li><a class="dropdown-item" href="{{ url('salesman')}}">Sales Man</a></li>
                    <li><a class="dropdown-item" href="{{ url('warehouse')}}">Warehouse</a></li>
                    <li><a class="dropdown-item" href="{{ url('department')}}">Department</a></li>
  
                    <!-- <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Create User</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Submenu</a></li>
                            <li><a class="dropdown-item" href="#">Submenu0</a></li>
                       
                        </ul>
                    </li> -->
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link text-white dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Transactions  </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Cash & Bank  </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Receipt</a></li>
                            <li><a class="dropdown-item" href="#">Payment</a></li>
                            <li><a class="dropdown-item" href="#">Petty Cash</a></li>
                            <!-- <li><a class="dropdown-item" href="#">Submenu0</a></li> -->
                       
                        </ul>
                    </li>     
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Purchases  </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Purchases Voucherse</a></li>
                            <li><a class="dropdown-item" href="#">Purchases Returns</a></li>
                        </ul>
                    </li>       
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Sales  </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('salesInvoice')}}">Sales Invoice</a></li>
                            <li><a class="dropdown-item" href="#">Tax Invoice</a></li>
                            <li><a class="dropdown-item" href="{{ url('compositionBill')}}">Compassion Bill</a></li>
                            <li><a class="dropdown-item" href="#">Sales Return</a></li>
                            <li><a class="dropdown-item" href="{{ url('salesOrder')}}">Sales Order</a></li>
                        </ul>
                    </li>       
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Service Bill  </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('serviceBill')}}">Service Bill</a></li>
                            <li><a class="dropdown-item" href="{{ url('taxInvoiceService')}}">Tax Invoice Service</a></li>
                        </ul>
                    </li>       
                       
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Journals     </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Creat Notes</a></li>
                            <li><a class="dropdown-item" href="#">Debits Notes</a></li>
                            <li><a class="dropdown-item" href="#">Opening Balance</a></li>
                            
                       
                        </ul>
                    </li> 
                    <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Stocks       </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ url('openingStock')}}">Opening Stocks</a></li>
                            <li><a class="dropdown-item" href="{{ url('shortageStock')}}">Shortage Stocks</a></li>
                            <li><a class="dropdown-item" href="{{ url('excessStock')}}">Excess Stocks</a></li>
                            
                       
                        </ul>
                    </li> 
                    
  
                    <!-- <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Create User</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Submenu</a></li>
                            <li><a class="dropdown-item" href="#">Submenu0</a></li>
                       
                        </ul>
                    </li> -->
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link text-white dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Financial Accounting  </a>
      
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link text-white dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Inventory</a>
              
            </li>     
            <li class="nav-item">
                <a class="nav-link text-white " href="{{url('logout1')}}">Logout</a>              
            </li>     
        </ul>
    </div>
</nav>
