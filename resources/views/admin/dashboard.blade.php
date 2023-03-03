@extends('layouts.master')

@section('title')
    hiiii test 1

@endsection

@section('content')
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
            <span>Tables</span>
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
<h1 class="page-title"> Bootstrap Table Plugin
    <small>extended bootstrap tables powered with bootstrap-table plugin</small>
</h1>
<!-- END PAGE TITLE-->
<!-- END PAGE HEADER-->
<div class="m-heading-1 border-green m-bordered">
    <h3>Bootstrap Table</h3>
    <p> An extended Bootstrap table with radio, checkbox, sort, pagination, and other added
        features. For more info please check out
        <a href="https://github.com/wenzhixin/bootstrap-table/"
            target="_blank">the official documentation</a>.
    </p>
</div>
<div class="mt-bootstrap-tables">
    <div class="row">
        <div class="col-md-6">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-social-dribbble font-dark hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Simple Table</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <table data-toggle="table"
                        data-url="../assets/global/plugins/bootstrap-table/data/data1.json"
                        data-height="299">
                        <thead>
                            <tr>
                                <th data-field="id">Item ID</th>
                                <th data-field="name">Item Name</th>
                                <th data-field="price">Item Price</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-social-dribbble font-green hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Table Styling</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="mt-checkbox-inline">
                        <label class="mt-checkbox">
                            <input id="hover"
                                type="checkbox"
                                checked=""> hover
                            <span></span>
                        </label>
                        <label class="mt-checkbox">
                            <input id="striped"
                                type="checkbox"> striped
                            <span></span>
                        </label>
                        <label class="mt-checkbox">
                            <input id="condensed"
                                type="checkbox"> condensed
                            <span></span>
                        </label>
                    </div>
                    <table id="table-style"
                        data-toggle="table"
                        data-url="../assets/global/plugins/bootstrap-table/data/data1.json"
                        data-height="299"
                        data-row-style="rowStyle">
                        <thead>
                            <tr>
                                <th data-field="id"
                                    class="col-md-2">Item ID</th>
                                <th data-field="name"
                                    class="col-md-6">
                                    <i class="glyphicon glyphicon-star"></i> Item Name
                                </th>
                                <th data-field="price"
                                    class="col-md-4">
                                    <i class="glyphicon glyphicon-heart"></i> Item Price
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-social-dribbble font-green hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Table Sorting</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <table data-toggle="table"
                        data-url="../assets/global/plugins/bootstrap-table/data/data1.json"
                        data-height="299"
                        data-sort-name="name"
                        data-sort-order="desc">
                        <thead>
                            <tr>
                                <th data-field="id"
                                    data-align="right"
                                    data-sortable="true">Item ID</th>
                                <th data-field="name"
                                    data-align="center"
                                    data-sortable="true">Item Name</th>
                                <th data-field="price"
                                    data-sortable="true">Item Price</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-social-dribbble font-green hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Table Column
                            Alignment</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <table data-toggle="table"
                        data-url="../assets/global/plugins/bootstrap-table/data/data1.json"
                        data-height="299">
                        <thead>
                            <tr>
                                <th data-field="id"
                                    data-halign="center"
                                    data-align="center">Align Center</th>
                                <th data-field="name"
                                    data-halign="left"
                                    data-align="left">Align Left</th>
                                <th data-field="price"
                                    data-halign="right"
                                    data-align="right">Align Right</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-social-dribbble font-green hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Card Table</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <table data-toggle="table"
                        data-url="../assets/global/plugins/bootstrap-table/data/data3.json"
                        data-height="299"
                        data-card-view="true">
                        <thead>
                            <tr>
                                <th data-field="state"
                                    data-radio="true"></th>
                                <th data-field="name"
                                    data-switchable="false">Name</th>
                                <th data-field="price">Price</th>
                                <th data-field="column1">Columns1</th>
                                <th data-field="column2"
                                    data-visible="false">Columns2</th>
                                <th data-field="column3"
                                    data-switchable="false">Columns3</th>
                                <th data-field="column4"
                                    data-visible="false">Columns4</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-social-dribbble font-green hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Hide Table
                            Header</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <table data-toggle="table"
                        data-url="../assets/global/plugins/bootstrap-table/data/data1.json"
                        data-height="299"
                        data-show-header="false">
                        <thead>
                            <tr>
                                <th data-field="name">Item Name</th>
                                <th data-field="price">Item Price</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-social-dribbble font-green hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Dynamic
                            Columns</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <table data-toggle="table"
                        data-url="../assets/global/plugins/bootstrap-table/data/data3.json"
                        data-height="299"
                        data-show-columns="true"
                        data-id-field="id">
                        <thead>
                            <tr>
                                <th data-field="state"
                                    data-radio="true"></th>
                                <th data-field="name"
                                    data-switchable="false">Name</th>
                                <th data-field="price">Price</th>
                                <th data-field="column1">Columns1</th>
                                <th data-field="column2"
                                    data-visible="false">Columns2</th>
                                <th data-field="column3"
                                    data-switchable="false">Columns3</th>
                                <th data-field="column4"
                                    data-visible="false">Columns4</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-social-dribbble font-green hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Transform
                            Table</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <div class="mt-btm-transform">
                        <div id="transform-buttons"
                            class="btn-group btn-default">
                            <button class="btn btn-default"
                                id="transform">
                                <i class="glyphicon glyphicon-transfer"></i>
                                <span data-zh="转换">Transform</span>
                            </button>
                            <button class="btn btn-default"
                                id="destroy">
                                <i class="glyphicon glyphicon-trash"></i>
                                <span data-zh="摧毁">Destroy</span>
                            </button>
                        </div>
                        <table id="table-transform"
                            data-toolbar="#transform-buttons"
                            data-height="299">
                            <thead>
                                <tr>
                                    <th data-field="id">Item ID</th>
                                    <th data-field="name">Item Name</th>
                                    <th data-field="price">Item Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>test1</td>
                                    <td>$1</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>test2</td>
                                    <td>$2</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>test3</td>
                                    <td>$3</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>test4</td>
                                    <td>$4</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>test5</td>
                                    <td>$5</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-social-dribbble font-green hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Table Basic
                            Toolbar</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <table data-toggle="table"
                        data-url="../assets/global/plugins/bootstrap-table/data/data1.json"
                        data-height="299"
                        data-show-refresh="true"
                        data-show-toggle="true"
                        data-show-columns="true"
                        data-search="true">
                        <thead>
                            <tr>
                                <th data-field="id"
                                    data-align="right">Item ID</th>
                                <th data-field="name"
                                    data-align="center">Item Name</th>
                                <th data-field="price"
                                    data-align="left">Item Price</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="icon-social-dribbble font-green hide"></i>
                        <span class="caption-subject font-dark bold uppercase">Table
                            Pagination</span>
                    </div>
                    <div class="actions">
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-cloud-upload"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-wrench"></i>
                        </a>
                        <a class="btn btn-circle btn-icon-only btn-default"
                            href="javascript:;">
                            <i class="icon-trash"></i>
                        </a>
                    </div>
                </div>
                <div class="portlet-body">
                    <table id="table-pagination"
                        data-toggle="table"
                        data-url="../assets/global/plugins/bootstrap-table/data/data2.json"
                        data-height="299"
                        data-pagination="true"
                        data-search="true">
                        <thead>
                            <tr>
                                <th data-field="state"
                                    data-checkbox="true"></th>
                                <th data-field="id"
                                    data-align="right"
                                    data-sortable="true">Item ID</th>
                                <th data-field="name"
                                    data-align="center"
                                    data-sortable="true">Item Name</th>
                                <th data-field="price"
                                    data-sortable="true"
                                    data-sorter="priceSorter">Item Price</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

@endsection

