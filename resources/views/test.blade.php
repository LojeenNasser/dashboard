@extends('layouts.master')

@section('title')
hiiii test 1

@endsection

@section('content')
   <div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN THEME PANEL -->
        <div class="theme-panel hidden-xs hidden-sm">
            <div class="toggler"> </div>
            <div class="toggler-close"> </div>
            <div class="theme-options">
                <div class="theme-option theme-colors clearfix">
                    <span> THEME COLOR </span>
                    <ul>
                        <li class="color-default current tooltips"
                            data-style="default"
                            data-container="body"
                            data-original-title="Default"> </li>
                        <li class="color-darkblue tooltips"
                            data-style="darkblue"
                            data-container="body"
                            data-original-title="Dark Blue"> </li>
                        <li class="color-blue tooltips"
                            data-style="blue"
                            data-container="body"
                            data-original-title="Blue"> </li>
                        <li class="color-grey tooltips"
                            data-style="grey"
                            data-container="body"
                            data-original-title="Grey"> </li>
                        <li class="color-light tooltips"
                            data-style="light"
                            data-container="body"
                            data-original-title="Light"> </li>
                        <li class="color-light2 tooltips"
                            data-style="light2"
                            data-container="body"
                            data-html="true"
                            data-original-title="Light 2"> </li>
                    </ul>
                </div>
                <div class="theme-option">
                    <span> Theme Style </span>
                    <select class="layout-style-option form-control input-sm">
                        <option value="square"
                            selected="selected">Square corners</option>
                        <option value="rounded">Rounded corners</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Layout </span>
                    <select class="layout-option form-control input-sm">
                        <option value="fluid"
                            selected="selected">Fluid</option>
                        <option value="boxed">Boxed</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Header </span>
                    <select class="page-header-option form-control input-sm">
                        <option value="fixed"
                            selected="selected">Fixed</option>
                        <option value="default">Default</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Top Menu Dropdown</span>
                    <select class="page-header-top-dropdown-style-option form-control input-sm">
                        <option value="light"
                            selected="selected">Light</option>
                        <option value="dark">Dark</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Sidebar Mode</span>
                    <select class="sidebar-option form-control input-sm">
                        <option value="fixed">Fixed</option>
                        <option value="default"
                            selected="selected">Default</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Sidebar Menu </span>
                    <select class="sidebar-menu-option form-control input-sm">
                        <option value="accordion"
                            selected="selected">Accordion</option>
                        <option value="hover">Hover</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Sidebar Style </span>
                    <select class="sidebar-style-option form-control input-sm">
                        <option value="default"
                            selected="selected">Default</option>
                        <option value="light">Light</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Sidebar Position </span>
                    <select class="sidebar-pos-option form-control input-sm">
                        <option value="left"
                            selected="selected">Left</option>
                        <option value="right">Right</option>
                    </select>
                </div>
                <div class="theme-option">
                    <span> Footer </span>
                    <select class="page-footer-option form-control input-sm">
                        <option value="fixed">Fixed</option>
                        <option value="default"
                            selected="selected">Default</option>
                    </select>
                </div>
            </div>
        </div>
        <!-- END THEME PANEL -->
        <!-- BEGIN PAGE BAR -->
        <div class="page-bar">
            <ul class="page-breadcrumb">
                <li>
                    <a href="index.html">Home</a>
                    <i class="fa fa-circle"></i>
                </li>
                <li>
                    <span>UI Features</span>
                </li>
            </ul>
            <div class="page-toolbar">
                <div class="btn-group pull-right">
                    <button type="button"
                        class="btn green btn-sm btn-outline dropdown-toggle"
                        data-toggle="dropdown"> Actions
                        <i class="fa fa-angle-down"></i>
                    </button>
                    <ul class="dropdown-menu pull-right"
                        role="menu">
                        <li>
                            <a href="#">
                                <i class="icon-bell"></i> Action</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-shield"></i> Another action</a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-user"></i> Something else here</a>
                        </li>
                        <li class="divider"> </li>
                        <li>
                            <a href="#">
                                <i class="icon-bag"></i> Separated link</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END PAGE BAR -->
        <!-- BEGIN PAGE TITLE-->
        <h1 class="page-title"> Metronic Grid System
            <small>Metronic's custom grid system</small>
        </h1>
        <!-- END PAGE TITLE-->
        <!-- END PAGE HEADER-->
        <div class="row">
            <div class="col-md-12">
                <div class="m-heading-1 border-green m-bordered">
                    <p> Use Metronic's Custom Grid System to build any type of UI blocks or elements that require easy
                        vertical or horizontal content alignment and auto full height adjustment with flex column
                        ordering support.
                        <br>No JS is required and all is powered with pure CSS.
                    </p>
                </div>
                <div class="portlet light bordered">
                    <div class="portlet-body">
                        <!-- begin: Demo 1 -->
                        <h3 class="">Adjusted Table With Equal Height Cells</h3>
                        <hr>
                        <div class="m-grid m-grid-demo">
                            <div class="m-grid-row">
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 1</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 2</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 3</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 4</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 5</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 6</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 7</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 8</div>
                            </div>
                            <div class="m-grid-row">
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 1</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 2</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 3</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 4</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 5</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 6</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 7</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 8</div>
                            </div>
                        </div>
                        <!--end: Demo 1 -->
                        <!-- begin: Demo 2 -->
                        <br>
                        <h3 class="">Column Sizing</h3>
                        <p> Use <code>m-grid-col-[device_width]-[size]</code> class where <code>[device_width]</code>
                            can be <code>xs</code>
                            < 480px,
                                <code>sm</code>
                                < 768px,
                                    <code>md</code>
                                    < 992px,
                                        <code>lg</code>
                                        < 1260px
                                            and
                                            <code>[size]</code> can be within <code>1-12</code> grid size.
                        </p>
                        <hr>
                        <div class="m-grid m-grid-demo">
                            <div class="m-grid-row">
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-md-1">
                                    m-grid-col-md-1</div>
                                <div
                                    class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-md-3 m-grid-col-md-offset-2">
                                    m-grid-col-md-3--</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-md-6">
                                    m-grid-col-md-6</div>
                            </div>
                        </div>
                        <div class="m-grid m-grid-demo">
                            <div class="m-grid-row">
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-md-3">
                                    m-grid-col-md-3</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-md-3">
                                    m-grid-col-md-3</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-md-3">
                                    m-grid-col-md-3</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-md-3">
                                    m-grid-col-md-3</div>
                            </div>
                        </div>
                        <div class="m-grid m-grid-demo">
                            <div class="m-grid-row">
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-md-6">
                                    m-grid-col-md-6</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-md-3">
                                    m-grid-col-md-3</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-md-2">
                                    m-grid-col-md-2</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-md-1">
                                    m-grid-col-md-1</div>
                            </div>
                        </div>
                        <!--end: Demo 2 -->
                        <!-- begin: Demo 3 -->
                        <br>
                        <h3 class="">Column Alignment</h3>
                        <p> Use <code>m-grid-col-top</code>, <code>m-grid-col-middle</code> and
                            <code>m-grid-col-bottom</code> classes to vertically align the cell content. Use
                            <code>m-grid-col-left</code>, <code>m-grid-col-center</code> and
                            <code>m-grid-col-right</code> classes to horizontally align the cell content.
                        </p>
                        <hr>
                        <div class="m-grid m-grid-demo">
                            <div class="m-grid-row">
                                <div class="m-grid-col m-grid-col-top m-grid-col-center m-grid-col-md-4">Top alignment
                                    content</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-md-4">Middle
                                    alignment content</div>
                                <div class="m-grid-col m-grid-col-bottom m-grid-col-center m-grid-col-md-4">Bottom
                                    alignment content</div>
                            </div>
                            <div class="m-grid-row">
                                <div class="m-grid-col m-grid-col-middle m-grid-col-left m-grid-col-md-4">Left alignment
                                    content</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-md-4">Center
                                    alignment content</div>
                                <div class="m-grid-col m-grid-col-middle m-grid-col-right m-grid-col-md-4">Right
                                    alignment content</div>
                            </div>
                        </div>
                        <!--end: Demo 3 -->
                        <!-- begin: Demo 4 -->
                        <br>
                        <h3 class="">Responsive Table Grid</h3>
                        <p> Use <code>m-grid-responsive-xs</code>, <code>m-grid-responsive-sm</code>,
                            <code>m-grid-responsive-md</code> or <code>m-grid-responsive-lg</code> classes to stack the
                            columns to vertical position for respective device
                            widths(*-xs
                            < 480px,
                                *-sm
                                <
                                768px,
                                *-md
                                <
                                992px,
                                *-lg
                                <
                                1260px).
                                Try
                                to
                                resize
                                your
                                browser
                                to
                                see
                                how
                                it
                                works.
                                </p>
                                <hr>
                                <h4 class="">Responsive Table Grid with <code>m-grid-responsive-xs</code></h4>
                                <div class="m-grid m-grid-responsive-xs m-grid-demo">
                                    <div class="m-grid-row">
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 1
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 2
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 3
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 4
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 5
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 6
                                        </div>
                                    </div>
                                    <div class="m-grid-row">
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 1
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 2
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 3
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 4
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 5
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 6
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <h4 class="">Responsive Table Grid with <code>m-grid-responsive-sm</code></h4>
                                <div class="m-grid m-grid-responsive-sm m-grid-demo">
                                    <div class="m-grid-row">
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 1
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 2
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 3
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 4
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 5
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 6
                                        </div>
                                    </div>
                                    <div class="m-grid-row">
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 1
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 2
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 3
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 4
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 5
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 6
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <h4 class="">Responsive Table Grid with <code>m-grid-responsive-md</code></h4>
                                <div class="m-grid m-grid-responsive-md m-grid-demo">
                                    <div class="m-grid-row">
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 1
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 2
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 3
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 4
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 5
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 6
                                        </div>
                                    </div>
                                    <div class="m-grid-row">
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 1
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 2
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 3
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 4
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 5
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 6
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <h4 class="">Responsive Table Grid with <code>m-grid-responsive-lg</code></h4>
                                <div class="m-grid m-grid-responsive-lg m-grid-demo">
                                    <div class="m-grid-row">
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 1
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 2
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 3
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 4
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 5
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 1, Column 6
                                        </div>
                                    </div>
                                    <div class="m-grid-row">
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 1
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 2
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 3
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 4
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 5
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center">Row 2, Column 6
                                        </div>
                                    </div>
                                </div>
                                <!--end: Demo 4 -->
                                <!-- begin: Demo 5 -->
                                <br>
                                <h3 class="">Responsive Table Grid With Flex Cell Ordering</h3>
                                <p> Use <code>m-grid-flex</code> and <code>m-grid-responsive-xs</code>,
                                    <code>m-grid-responsive-sm</code>, <code>m-grid-responsive-md</code> or
                                    <code>m-grid-responsive-lg</code> classes to stack the columns
                                    to vertical position for respective device widths(*-xs
                                    < 480px,
                                        *-sm
                                        <
                                        768px,
                                        *-md
                                        <
                                        992px,
                                        *-lg
                                        <
                                        1260px)
                                        with
                                        defined
                                        cell
                                        flex
                                        ordering
                                        using
                                        <code>m-grid-col-order-[order_number]</code> where [order_number] can be within
                                        <code>1-12</code>. Try to resize your browser to see how it works.
                                </p>
                                <hr>
                                <div class="m-grid m-grid-flex m-grid-responsive-md m-grid-demo">
                                    <div class="m-grid-row">
                                        <div
                                            class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-order-4 bg-yellow font-white">
                                            Flex order 4</div>
                                        <div
                                            class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-order-3 bg-purple font-white">
                                            Flex order 3</div>
                                        <div
                                            class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-order-2 bg-green font-white">
                                            Flex order 2</div>
                                        <div
                                            class="m-grid-col m-grid-col-middle m-grid-col-center m-grid-col-order-1 bg-red font-white">
                                            Flex order 1</div>
                                    </div>
                                </div>
                                <!--end: Demo 5 -->
                                <!-- begin: Demo 5 -->
                                <br>
                                <h3 class="">Full Height Inner Content</h3>
                                <p> Use <code>m-grid m-grid-full-height</code> class to make grids full height. Also you
                                    can use nested grids to control vertical position of the content as shown below:
                                </p>
                                <hr>
                                <div class="m-grid m-grid-responsive-md m-grid-demo">
                                    <div class="m-grid-row">
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center"
                                            style="padding: 30px; height: 400px">
                                            <div class="m-grid m-grid-full-height">
                                                <div class="m-grid-col m-grid-col-middle m-grid-col-center bg-red font-white"
                                                    style="padding: 20px;">Sample cell with padding
                                                    <br>and full height content
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center"
                                            style="padding: 30px; height: 400px">
                                            <div class="m-grid m-grid-full-height">
                                                <div class="m-grid-col m-grid-col-top m-grid-col-right bg-green font-white"
                                                    style="padding: 20px;">Sample cell with padding
                                                    <br>and full height content
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center"
                                            style="padding: 30px; height: 400px">
                                            <div class="m-grid m-grid-full-height">
                                                <div class="m-grid-col m-grid-col-bottom m-grid-col-left bg-yellow font-white"
                                                    style="padding: 20px;">Sample cell with padding
                                                    <br>and full height content
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-grid-col m-grid-col-middle m-grid-col-center"
                                            style="padding: 30px; height: 400px">
                                            <div class="m-grid m-grid-full-height">
                                                <div class="m-grid-col m-grid-col-middle m-grid-col-right bg-blue font-white"
                                                    style="padding: 20px;">Sample cell with padding
                                                    <br>and full height content
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Demo 5 -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT BODY -->
</div>

@endsection
@section('scripts')

@endsection
