<div>
    <div>
        <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <!--begin::Toolbar-->
            <div class="toolbar d-flex flex-stack mb-3 mb-lg-5" id="kt_toolbar">
                <!--begin::Container-->
                <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack flex-wrap">
                    <!--begin::Page title-->
                    <div class="page-title d-flex flex-column me-5 py-2">
                        <!--begin::Title-->
                        <h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Add Tag</h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 pt-1">
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">
                                <a href="{{ route('dashboard') }}" class="text-muted text-hover-primary">Home</a>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-200 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">eCommerce</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-200 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted">Catalog</li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-200 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-dark">Add Tag</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center py-2">
                        <!--begin::Wrapper-->
                        <div class="me-4">
                            <!--begin::Menu-->
                            {{-- <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-filter fs-5 text-gray-500 me-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>Filter</a> --}}
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b7766eafb11">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Menu separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Menu separator-->
                                <!--begin::Form-->
                                <div class="px-7 py-5">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Status:</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <div>
                                            <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b7766eafb11" data-allow-clear="true">
                                                <option></option>
                                                <option value="1">Approved</option>
                                                <option value="2">Pending</option>
                                                <option value="2">In Process</option>
                                                <option value="2">Rejected</option>
                                            </select>
                                        </div>
                                        <!--end::Input-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Member Type:</label>
                                        <!--end::Label-->
                                        <!--begin::Options-->
                                        <div class="d-flex">
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                                <input class="form-check-input" type="checkbox" value="1" />
                                                <span class="form-check-label">Author</span>
                                            </label>
                                            <!--end::Options-->
                                            <!--begin::Options-->
                                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                                <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                                <span class="form-check-label">Customer</span>
                                            </label>
                                            <!--end::Options-->
                                        </div>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label fw-semibold">Notifications:</label>
                                        <!--end::Label-->
                                        <!--begin::Switch-->
                                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                            <label class="form-check-label">Enabled</label>
                                        </div>
                                        <!--end::Switch-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Form-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Menu-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Button-->
                        {{-- <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a> --}}
                        <!--end::Button-->
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Container-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Post-->
            <div class="post d-flex flex-column-fluid" id="kt_post">
                <!--begin::Container-->
                <div id="kt_content_container" class="container-xxl">
                    <form method="POST" action="{{ route('tag.store') }}" enctype="multipart/form-data" class="form d-flex flex-column flex-lg-row">
                        {{-- <form method="POST" action="{{ route('category.store') }}" enctype="multipart/form-data" id="kt_ecommerce_add_category_form" class="form d-flex flex-column flex-lg-row" data-kt-redirect="../../demo10/dist/apps/ecommerce/catalog/tags.html"> --}}
                        <!--begin::Aside column-->
                        @csrf
                        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                            <!--begin::Thumbnail settings-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Thumbnail</h2>
                                    </div>
                                    <!--end::Card title-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body text-center pt-0">
                                    <!--begin::Image input-->
                                    <!--begin::Image input placeholder-->
                                    <style>.image-input-placeholder { background-image: url('assets/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('assets/media/svg/files/blank-image-dark.svg'); }</style>
                                    <!--end::Image input placeholder-->
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-150px h-150px"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                            <!--begin::Icon-->
                                            <i class="ki-duotone ki-pencil fs-7">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                            <!--end::Icon-->
                                            <!--begin::Inputs-->
                                            <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
                                            <input type="hidden" name="avatar_remove" />
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Cancel-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
                                            <i class="ki-duotone ki-cross fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <!--end::Cancel-->
                                        <!--begin::Remove-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove avatar">
                                            <i class="ki-duotone ki-cross fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </span>
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set the Tag thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                                    <!--end::Description-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Thumbnail settings-->
                            <!--begin::Status-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <!--begin::Card title-->
                                    <div class="card-title">
                                        <h2>Status</h2>
                                    </div>
                                    <!--end::Card title-->
                                    <!--begin::Card toolbar-->
                                    <div class="card-toolbar">
                                        <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_category_status"></div>
                                    </div>
                                    <!--begin::Card toolbar-->
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Select2-->
                                    <select  name="status" class="form-select mb-2" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_category_status_select">
                                        <option></option>
                                        <option value="1" selected="selected">Published</option>
                                        <option value="2">Scheduled</option>
                                        <option value="3">Unpublished</option>
                                    </select>
                                    <!--end::Select2-->
                                    <!--begin::Description-->
                                    <div class="text-muted fs-7">Set the Tag status.</div>
                                    <!--end::Description-->
                                    <!--begin::Datepicker-->
                                    <div class="d-none mt-10">
                                        <label for="kt_ecommerce_add_category_status_datepicker" class="form-label">Select publishing date and time</label>
                                        <input class="form-control" id="kt_ecommerce_add_category_status_datepicker" placeholder="Pick date & time" />
                                    </div>
                                    <!--end::Datepicker-->
                                </div>
                                <!--end::Card body-->
                            </div>
                            <!--end::Status-->
                            <!--begin::Template settings-->
                            
                            <!--end::Template settings-->
                        </div>
                        <!--end::Aside column-->
                        <!--begin::Main column-->
                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                            <!--begin::General options-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>General</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <div class="mb-10 fv-row">
                                        <!--begin::Label-->
                                        <label class="required form-label">Tag Name</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" name="name" class="form-control mb-2" placeholder="Tag name" value="" />
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">A Tag name is required and recommended to be unique.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="form-label">Description</label>
                                        <!--end::Label-->
                                        <!--begin::Editor-->
                                        <div id="kt_ecommerce_add_category_description" name="description" class="min-h-200px mb-2"></div>
                                        <!--end::Editor-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set a description to the Tag for better visibility.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::General options-->
                            <!--begin::Meta options-->
                            <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Meta Options</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label">Meta Tag Title</label>
                                        <!--end::Label-->
                                        <!--begin::Input-->
                                        <input type="text" class="form-control mb-2" name="meta_title" placeholder="Meta tag name" />
                                        <!--end::Input-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set a meta tag title. Recommended to be simple and precise keywords.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <!--begin::Label-->
                                        <label class="form-label">Meta Tag Description</label>
                                        <!--end::Label-->
                                        <!--begin::Editor-->
                                        <div id="kt_ecommerce_add_category_meta_description" name="meta_description" class="min-h-100px mb-2"></div>
                                        <!--end::Editor-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set a meta tag description to the Tag for increased SEO ranking.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="form-label">Meta Tag Keywords</label>
                                        <!--end::Label-->
                                        <!--begin::Editor-->
                                        <input id="kt_ecommerce_add_category_meta_keywords" name="meta_keyword" class="form-control mb-2" />
                                        <!--end::Editor-->
                                        <!--begin::Description-->
                                        <div class="text-muted fs-7">Set a list of keywords that the Tag is related to. Separate the keywords by adding a comma
                                        <code>,</code>between each keyword.</div>
                                        <!--end::Description-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card header-->
                            </div>
                            <!--end::Meta options-->
                            <!--begin::Automation-->
                            {{-- <div class="card card-flush py-4">
                                <!--begin::Card header-->
                                <div class="card-header">
                                    <div class="card-title">
                                        <h2>Automation</h2>
                                    </div>
                                </div>
                                <!--end::Card header-->
                                <!--begin::Card body-->
                                <div class="card-body pt-0">
                                    <!--begin::Input group-->
                                    <div>
                                        <!--begin::Label-->
                                        <label class="form-label mb-5">Product assignment method</label>
                                        <!--end::Label-->
                                        <!--begin::Methods-->
                                        <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="method" type="radio" value="0" id="kt_ecommerce_add_category_automation_0" checked='checked' />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_ecommerce_add_category_automation_0">
                                                    <div class="fw-bold text-gray-800">Manual</div>
                                                    <div class="text-gray-600">Add products to this category one by one by manually selecting this category during product creation or update.</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                        <div class='separator separator-dashed my-5'></div>
                                        <!--begin::Input row-->
                                        <div class="d-flex fv-row">
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <!--begin::Input-->
                                                <input class="form-check-input me-3" name="method" type="radio" value="1" id="kt_ecommerce_add_category_automation_1" />
                                                <!--end::Input-->
                                                <!--begin::Label-->
                                                <label class="form-check-label" for="kt_ecommerce_add_category_automation_1">
                                                    <div class="fw-bold text-gray-800">Automatic</div>
                                                    <div class="text-gray-600">Products matched with the following conditions will be automatically assigned to this category.</div>
                                                </label>
                                                <!--end::Label-->
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Input row-->
                                        <!--end::Methods-->
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="d-none mt-10" data-kt-ecommerce-catalog-add-category="auto-options">
                                        <!--begin::Label-->
                                        <label class="form-label">Conditions</label>
                                        <!--end::Label-->
                                        <!--begin::Conditions-->
                                        <div class="d-flex flex-wrap align-items-center text-gray-600 gap-5 mb-7">
                                            <span>Products must match:</span>
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="conditions" value="" id="all_conditions" checked="checked" />
                                                <label class="form-check-label" for="all_conditions">All conditions</label>
                                            </div>
                                            <!--end::Radio-->
                                            <!--begin::Radio-->
                                            <div class="form-check form-check-custom form-check-solid">
                                                <input class="form-check-input" type="radio" name="conditions" value="" id="any_conditions" />
                                                <label class="form-check-label" for="any_conditions">Any conditions</label>
                                            </div>
                                            <!--end::Radio-->
                                        </div>
                                        <!--end::Conditions-->
                                        <!--begin::Repeater-->
                                        <div id="kt_ecommerce_add_category_conditions">
                                            <!--begin::Form group-->
                                            <div class="form-group">
                                                <div data-repeater-list="kt_ecommerce_add_category_conditions" class="d-flex flex-column gap-3">
                                                    <div data-repeater-item="" class="form-group d-flex flex-wrap align-items-center gap-5">
                                                        <!--begin::Select2-->
                                                        <div class="w-100 w-md-200px">
                                                            <select class="form-select" name="condition_type" data-placeholder="Select an option" data-kt-ecommerce-catalog-add-category="condition_type">
                                                                <option></option>
                                                                <option value="title">Product Title</option>
                                                                <option value="tag" selected="selected">Product Tag</option>
                                                                <option value="price">Prodict Price</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Select2-->
                                                        <!--begin::Select2-->
                                                        <div class="w-100 w-md-200px">
                                                            <select class="form-select" name="condition_equals" data-placeholder="Select an option" data-kt-ecommerce-catalog-add-category="condition_equals">
                                                                <option></option>
                                                                <option value="equal" selected="selected">is equal to</option>
                                                                <option value="notequal">is not equal to</option>
                                                                <option value="greater">is greater than</option>
                                                                <option value="less">is less than</option>
                                                                <option value="starts">starts with</option>
                                                                <option value="ends">ends with</option>
                                                            </select>
                                                        </div>
                                                        <!--end::Select2-->
                                                        <!--begin::Input-->
                                                        <input type="text" class="form-control mw-100 w-200px" name="condition_label" placeholder="" />
                                                        <!--end::Input-->
                                                        <!--begin::Button-->
                                                        <button type="button" data-repeater-delete="" class="btn btn-sm btn-icon btn-light-danger">
                                                            <i class="ki-duotone ki-cross fs-2">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
                                                        </button>
                                                        <!--end::Button-->
                                                    </div>
                                                </div>
                                            </div>
                                            <!--end::Form group-->
                                            <!--begin::Form group-->
                                            <div class="form-group mt-5">
                                                <!--begin::Button-->
                                                <button type="button" data-repeater-create="" class="btn btn-sm btn-light-primary">
                                                <i class="ki-duotone ki-plus fs-2"></i>Add another condition</button>
                                                <!--end::Button-->
                                            </div>
                                            <!--end::Form group-->
                                        </div>
                                        <!--end::Repeater-->
                                    </div>
                                    <!--end::Input group-->
                                </div>
                                <!--end::Card header-->
                            </div> --}}
                            <!--end::Automation-->
                            <div class="d-flex justify-content-end">
                                <!--begin::Button-->
                                <a href="{{ route('products') }}" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">Cancel</a>
                                <!--end::Button-->
                                <!--begin::Button-->
                                <button type="submit" class="btn btn-primary">
                                    {{-- <button type="submit" id="kt_ecommerce_add_category_submit" class="btn btn-primary"> --}}
                                    <span class="indicator-label">Save Changes</span>
                                    <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                </button>
                                <!--end::Button-->
                            </div>
                        </div>
                        <!--end::Main column-->
                    </form>
                </div>
                <!--end::Container-->
            </div>
            <!--end::Post-->
        </div>
    </div>
    
</div>
