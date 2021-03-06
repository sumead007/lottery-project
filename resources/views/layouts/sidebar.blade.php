<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.index') }}" class="brand-link">
        <!--<img src="{{ asset('adminlte/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">-->
        <i class="fas fa-laptop-code fa-1x"></i>
        {{-- <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span> --}}
        ส่วนกลาง
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        {{-- Sidebar user panel (optional) --}}
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">คุณ: {{ Auth::guard('user')->user()->fname }}
                    {{ Auth::guard('user')->user()->lname }}</a>
            </div>
        </div>
        @section('sidebar')
            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                                                                                                               with font-awesome or any other icon font library -->
                    <li class="nav-header">หน้าแรก</li>
                    <li class="nav-item">
                        <a href="{{ route('admin.index') }}"
                            class="nav-link {{ Request::routeIs('admin.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-home"></i>
                            <p>
                                หน้าแรก
                                {{-- <span class="badge badge-info right">2</span> --}}
                            </p>
                        </a>
                    </li>
                    {{-- เริ่มจัดการช้อมูล --}}
                    {{-- <li class="nav-header">จัดการข้อมูล</li> --}}
                    {{-- <li
                        class="nav-item has-treeview {{ Request::routeIs('admin.view.viewAdmin', 'admin.view.viewCustomer', 'admin.view.viewLottery', 'admin.view.viewBank', 'admin.view.viewWebsiteDetail', 'admin.view.viewCustomerBank') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ Request::routeIs('admin.view.viewAdmin', 'admin.view.viewCustomer', 'admin.view.viewLottery', 'admin.view.viewBank', 'admin.view.viewWebsiteDetail', 'admin.view.viewCustomerBank') ? 'active' : '' }} ">
                            <i class="nav-icon fas fa-tasks"></i>
                            <p>
                                จัดการข้อมูลพื้นฐาน
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.view.viewAdmin') }}"
                                    class="nav-link {{ Request::routeIs('admin.view.viewAdmin') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>จัดการข้อมูลแอตมิน</p>
                                </a>
                            </li>
                            <li
                                class="nav-item has-treeview {{ Request::routeIs('admin.view.viewCustomer', 'admin.view.viewCustomerBank') ? 'menu-open' : '' }}">
                                <a href="#"
                                    class="nav-link {{ Request::routeIs('admin.view.viewCustomer', 'admin.view.viewCustomerBank') ? 'active' : '' }}">
                                    <i class="fab fa-intercom nav-icon"></i>
                                    <p>
                                        ข้อมูลลูกค้า
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <ul
                                    class="nav nav-treeview {{ Request::routeIs('admin.view.viewCustomer', 'admin.view.viewCustomerBank') ? 'active' : '' }}">
                                    <li class="nav-item">
                                        <a href="{{ route('admin.view.viewCustomer') }}"
                                            class="nav-link {{ Request::routeIs('admin.view.viewCustomer') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>จัดการข้อมูลลูกค้า</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('admin.view.viewCustomerBank') }}"
                                            class="nav-link {{ Request::routeIs('admin.view.viewCustomerBank') ? 'active' : '' }}">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>จัดการธนาคารลูกค้า</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.view.viewLottery') }}"
                                    class="nav-link {{ Request::routeIs('admin.view.viewLottery') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>จัดการข้อมูลหวย</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.view.viewBank') }}"
                                    class="nav-link {{ Request::routeIs('admin.view.viewBank') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>จัดการข้อมูลธนาคาร</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.view.viewWebsiteDetail') }}"
                                    class="nav-link {{ Request::routeIs('admin.view.viewWebsiteDetail') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>จัดการข้อมูลเว็บไซต์</p>
                                </a>
                            </li>
                    </li> --}}
                    {{-- จบจัดการข้อมูล --}}

                    <li class="nav-header">ข้อมูลสมาชิก</li>
                    <li class="nav-item {{ Request::routeIs('admin.view.viewCustomer', 'admin.view.view_manage_branch','admin.view.view_manage_seller') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ Request::routeIs('admin.view.viewCustomer', 'admin.view.view_manage_branch','admin.view.view_manage_seller') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-users"></i>
                            <p>
                                ข้อมูลสมาชิก
                                <i class="fas fa-angle-left right"></i>

                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.view.view_manage_branch') }}"
                                    class="nav-link {{ Request::routeIs('admin.view.view_manage_branch') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>สาขาย่อย</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.view.view_manage_seller') }}"
                                    class="nav-link {{ Request::routeIs('admin.view.view_manage_seller') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>ผู้ขาย</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.view.viewCustomer') }}"
                                    class="nav-link {{ Request::routeIs('admin.view.viewCustomer') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>ผู้ซื้อ</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-header">ข้อมูลสลาก</li>
                    <li class="nav-item {{ Request::routeIs('admin.view.viewLottery') ? 'menu-open' : '' }}">
                        <a href="#" class="nav-link {{ Request::routeIs('admin.view.viewLottery') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-ticket-alt"></i>
                            <p>
                                ข้อมูลสลาก
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.view.viewHistoryTransfer_notice') }}"
                                    class="nav-link {{ Request::routeIs('admin.view.viewHistoryTransfer_notice') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>แต่ละสาขา</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.view.viewLottery') }}"
                                    class="nav-link {{ Request::routeIs('admin.view.viewLottery') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>ทั้งหมด</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-header">ข้อมูลรายรับค่าฝาก</li>
                    <li
                        class="nav-item {{ Request::routeIs('admin.view.viewConfirmationMoney', 'admin.view.viewHistoryConfirmationMoney', 'admin.view.viewHistoryTransfer_notice') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ Request::routeIs('admin.view.viewConfirmationMoney', 'admin.view.viewHistoryConfirmationMoney', 'admin.view.viewHistoryTransfer_notice') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-calendar-day"></i>
                            <p>
                                ข้อมูลรายรับค่าฝาก
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.view.viewHistoryTransfer_notice') }}"
                                    class="nav-link {{ Request::routeIs('admin.view.viewHistoryTransfer_notice') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>แต่ละสาขา</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.view.viewConfirmationMoney') }}"
                                    class="nav-link {{ Request::routeIs('admin.view.viewConfirmationMoney') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>ทั้งหมด</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-header">ข้อมูลยอดขาย</li>
                    <li
                        class="nav-item {{ Request::routeIs('admin.view.viewConfirmationMoney', 'admin.view.viewHistoryConfirmationMoney', 'admin.view.viewHistoryTransfer_notice') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ Request::routeIs('admin.view.viewConfirmationMoney', 'admin.view.viewHistoryConfirmationMoney', 'admin.view.viewHistoryTransfer_notice') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-chart-bar"></i>
                            <p>
                                ข้อมูลยอดขาย
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.view.viewHistoryTransfer_notice') }}"
                                    class="nav-link {{ Request::routeIs('admin.view.viewHistoryTransfer_notice') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>แต่ละสาขา</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.view.viewHistoryTransfer_notice') }}"
                                    class="nav-link {{ Request::routeIs('admin.view.viewHistoryTransfer_notice') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>ทั้งหมด</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-header">ข้อมูลการรับชำระเงิน(การซื้อ)​</li>
                    <li
                        class="nav-item {{ Request::routeIs('admin.view.viewConfirmationMoney', 'admin.view.viewHistoryConfirmationMoney', 'admin.view.viewHistoryTransfer_notice') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ Request::routeIs('admin.view.viewConfirmationMoney', 'admin.view.viewHistoryConfirmationMoney', 'admin.view.viewHistoryTransfer_notice') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-money-check-alt"></i>
                            <p>
                                ข้อมูลการรับชำระเงิน​
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.view.viewConfirmationMoney') }}"
                                    class="nav-link {{ Request::routeIs('admin.view.viewConfirmationMoney') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>รอการชำระเงิน</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.view.viewHistoryTransfer_notice') }}"
                                    class="nav-link {{ Request::routeIs('admin.view.viewHistoryTransfer_notice') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>รายการแจ้งโอน</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.view.viewHistoryConfirmationMoney') }}"
                                    class="nav-link {{ Request::routeIs('admin.view.viewHistoryConfirmationMoney') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>รายการตรวจสอบชำระแล้ว</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-header">ข้อมูลสลากที่ถูกรางวัล</li>
                    <li
                        class="nav-item {{ Request::routeIs('admin.view.viewConfirmationMoney', 'admin.view.viewHistoryConfirmationMoney', 'admin.view.viewHistoryTransfer_notice') ? 'menu-open' : '' }}">
                        <a href="#"
                            class="nav-link {{ Request::routeIs('admin.view.viewConfirmationMoney', 'admin.view.viewHistoryConfirmationMoney', 'admin.view.viewHistoryTransfer_notice') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-check-circle"></i>
                            <p>
                                ข้อมูลสลากที่ถูกรางวัล
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ route('admin.view.viewHistoryTransfer_notice') }}"
                                    class="nav-link {{ Request::routeIs('admin.view.viewHistoryTransfer_notice') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>รอผู้ซื้อดำเนินการ</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.view.viewHistoryTransfer_notice') }}"
                                    class="nav-link {{ Request::routeIs('admin.view.viewHistoryTransfer_notice') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>ขอขึ้นเงิน(หัก2%)​</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin.view.viewHistoryTransfer_notice') }}"
                                    class="nav-link {{ Request::routeIs('admin.view.viewHistoryTransfer_notice') ? 'active' : '' }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>ขอรับสลากที่สาขา</p>
                                </a>
                            </li>
                        </ul>
                    </li>

                    <li class="nav-header">ข้อมูลการจ่ายเงิน</li>
                    <li class="nav-item">
                        <a href="{{ route('admin.index') }}"
                            class="nav-link {{ Request::routeIs('admin.index') ? 'active' : '' }}">
                            <i class="nav-icon fas fa-cash-register"></i>
                            <p>
                                ข้อมูลการจ่ายเงิน
                                {{-- <span class="badge badge-info right">2</span> --}}
                            </p>
                        </a>
                    </li>
                    </li>
                    {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Simple Link
                            <span class="right badge badge-danger">New</span>
                        </p>
                    </a>
                </li> --}}
                </ul>
            </nav>
        @show
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
