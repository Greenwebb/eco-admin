{{-- 
@php
function getInitials($inputString) {
    $words = explode(' ', $inputString); // Split the input string into words
    $initials = '';
    
    foreach ($words as $word) {
        $initials .= strtoupper($word[0]); // Convert the first character to uppercase
    }
    
    return $initials;
}// Output: BN
@endphp --}}
<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Toolbar-->
    <div class="toolbar d-flex flex-stack mb-3 mb-lg-5" id="kt_toolbar">
        <!--begin::Container-->
        <div id="kt_toolbar_container" class="container-fluid d-flex flex-stack flex-wrap">
            <!--begin::Page title-->
            <div class="page-title d-flex flex-column me-5 py-2">
                <!--begin::Title-->
                <h1 class="d-flex flex-column text-dark fw-bold fs-3 mb-0">Seller List</h1>
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
                    <li class="breadcrumb-item text-muted">Users</li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item">
                        <span class="bullet bg-gray-200 w-5px h-2px"></span>
                    </li>
                    <!--end::Item-->
                    <!--begin::Item-->
                    <li class="breadcrumb-item text-dark">Seller List</li>
                    <!--end::Item-->
                </ul>
                <!--end::Breadcrumb-->
            </div>
            <!--end::Page title-->
            <!--begin::Actions-->
            <div class="d-flex align-items-center py-2">
                <!--begin::Wrapper-->
                {{--  <div class="me-4">
                    <!--begin::Menu-->
                    <a href="#" class="btn btn-sm btn-flex btn-light btn-active-primary fw-bold" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                    <i class="ki-duotone ki-filter fs-5 text-gray-500 me-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>Filter</a>
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_64b77672f3b6c">
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
                                    <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_64b77672f3b6c" data-allow-clear="true">
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
                </div>  --}}
                <!--end::Wrapper-->
                <!--begin::Button-->
                {{--  <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="kt_toolbar_primary_button">Create</a>  --}}
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
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center position-relative my-1">
                            <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-5">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                            <input type="text" data-kt-user-table-filter="search" class="form-control form-control-solid w-250px ps-13" placeholder="Search user" />
                        </div>
                        <!--end::Search-->
                    </div>
                    <!--begin::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <!--begin::Toolbar-->
                        {{--  <div class="d-flex justify-content-end" data-kt-user-table-toolbar="base">
                            <!--begin::Filter-->
                            <button type="button" class="btn btn-light-primary me-3" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-filter fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>Filter</button>
                            <!--begin::Menu 1-->
                            <div class="menu menu-sub menu-sub-dropdown w-300px w-md-325px" data-kt-menu="true">
                                <!--begin::Header-->
                                <div class="px-7 py-5">
                                    <div class="fs-5 text-dark fw-bold">Filter Options</div>
                                </div>
                                <!--end::Header-->
                                <!--begin::Separator-->
                                <div class="separator border-gray-200"></div>
                                <!--end::Separator-->
                                <!--begin::Content-->
                                <div class="px-7 py-5" data-kt-user-table-filter="form">
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <label class="form-label fs-6 fw-semibold">Role:</label>
                                        <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="role" data-hide-search="true">
                                            <option></option>
                                            <option value="Administrator">Administrator</option>
                                            <option value="Analyst">Analyst</option>
                                            <option value="Developer">Developer</option>
                                            <option value="Support">Support</option>
                                            <option value="Trial">Trial</option>
                                        </select>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Input group-->
                                    <div class="mb-10">
                                        <label class="form-label fs-6 fw-semibold">Two Step Verification:</label>
                                        <select class="form-select form-select-solid fw-bold" data-kt-select2="true" data-placeholder="Select option" data-allow-clear="true" data-kt-user-table-filter="two-step" data-hide-search="true">
                                            <option></option>
                                            <option value="Enabled">Enabled</option>
                                        </select>
                                    </div>
                                    <!--end::Input group-->
                                    <!--begin::Actions-->
                                    <div class="d-flex justify-content-end">
                                        <button type="reset" class="btn btn-light btn-active-light-primary fw-semibold me-2 px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="reset">Reset</button>
                                        <button type="submit" class="btn btn-primary fw-semibold px-6" data-kt-menu-dismiss="true" data-kt-user-table-filter="filter">Apply</button>
                                    </div>
                                    <!--end::Actions-->
                                </div>
                                <!--end::Content-->
                            </div>
                            <!--end::Menu 1-->
                            <!--end::Filter-->
                            <!--begin::Export-->
                            <button type="button" class="btn btn-light-primary me-3" data-bs-toggle="modal" data-bs-target="#kt_modal_export_users">
                            <i class="ki-duotone ki-exit-up fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>Export</button>
                            <!--end::Export-->
                            <!--begin::Add user-->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_user">
                            <i class="ki-duotone ki-plus fs-2"></i>Add User</button>
                            <!--end::Add user-->
                        </div>  --}}
                        <!--end::Toolbar-->
                        <!--begin::Group actions-->
                        <div class="d-flex justify-content-end align-items-center d-none" data-kt-user-table-toolbar="selected">
                            <div class="fw-bold me-5">
                            <span class="me-2" data-kt-user-table-select="selected_count"></span>Selected</div>
                            <button type="button" class="btn btn-danger" data-kt-user-table-select="delete_selected">Delete Selected</button>
                        </div>
                        <!--end::Group actions-->
                        <!--begin::Modal - Adjust Balance-->
                        <div class="modal fade" id="kt_modal_export_users" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bold">Export Users</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                            <i class="ki-duotone ki-cross fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                                        <!--begin::Form-->
                                        <form id="kt_modal_export_users_form" class="form" action="#">
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="fs-6 fw-semibold form-label mb-2">Select Roles:</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select name="role" data-control="select2" data-placeholder="Select a role" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                                    <option></option>
                                                    <option value="Administrator">Administrator</option>
                                                    <option value="Analyst">Analyst</option>
                                                    <option value="Developer">Developer</option>
                                                    <option value="Support">Support</option>
                                                    <option value="Trial">Trial</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Input group-->
                                            <div class="fv-row mb-10">
                                                <!--begin::Label-->
                                                <label class="required fs-6 fw-semibold form-label mb-2">Select Export Format:</label>
                                                <!--end::Label-->
                                                <!--begin::Input-->
                                                <select name="format" data-control="select2" data-placeholder="Select a format" data-hide-search="true" class="form-select form-select-solid fw-bold">
                                                    <option></option>
                                                    <option value="excel">Excel</option>
                                                    <option value="pdf">PDF</option>
                                                    <option value="cvs">CVS</option>
                                                    <option value="zip">ZIP</option>
                                                </select>
                                                <!--end::Input-->
                                            </div>
                                            <!--end::Input group-->
                                            <!--begin::Actions-->
                                            <div class="text-center">
                                                <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
                                                <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                    <span class="indicator-label">Submit</span>
                                                    <span class="indicator-progress">Please wait...
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Modal body-->
                                </div>
                                <!--end::Modal content-->
                            </div>
                            <!--end::Modal dialog-->
                        </div>
                        <!--end::Modal - New Card-->
                        <!--begin::Modal - Add task-->
                        <div class="modal fade" id="kt_modal_add_user" tabindex="-1" aria-hidden="true">
                            <!--begin::Modal dialog-->
                            <div class="modal-dialog modal-dialog-centered mw-650px">
                                <!--begin::Modal content-->
                                <div class="modal-content">
                                    <!--begin::Modal header-->
                                    <div class="modal-header" id="kt_modal_add_user_header">
                                        <!--begin::Modal title-->
                                        <h2 class="fw-bold">Add User</h2>
                                        <!--end::Modal title-->
                                        <!--begin::Close-->
                                        <div class="btn btn-icon btn-sm btn-active-icon-primary" data-kt-users-modal-action="close">
                                            <i class="ki-duotone ki-cross fs-1">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Close-->
                                    </div>
                                    <!--end::Modal header-->
                                    <!--begin::Modal body-->
                                    <div class="modal-body px-5 my-7">
                                        <!--begin::Form-->
                                        <form id="kt_modal_add_user_form" class="form" action="#">
                                            <!--begin::Scroll-->
                                            <div class="d-flex flex-column scroll-y px-5 px-lg-10" id="kt_modal_add_user_scroll" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_user_header" data-kt-scroll-wrappers="#kt_modal_add_user_scroll" data-kt-scroll-offset="300px">
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="d-block fw-semibold fs-6 mb-5">Avatar</label>
                                                    <!--end::Label-->
                                                    <!--begin::Image placeholder-->
                                                    <style>.image-input-placeholder { background-image: url('assets/media/svg/files/blank-image.svg'); } [data-bs-theme="dark"] .image-input-placeholder { background-image: url('assets/media/svg/files/blank-image-dark.svg'); }</style>
                                                    <!--end::Image placeholder-->
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-outline image-input-placeholder" data-kt-image-input="true">
                                                        <!--begin::Preview existing avatar-->
                                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url(assets/media/avatars/300-6.jpg);"></div>
                                                        <!--end::Preview existing avatar-->
                                                        <!--begin::Label-->
                                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
                                                            <i class="ki-duotone ki-pencil fs-7">
                                                                <span class="path1"></span>
                                                                <span class="path2"></span>
                                                            </i>
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
                                                    <!--begin::Hint-->
                                                    <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                                    <!--end::Hint-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-semibold fs-6 mb-2">Full Name</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="text" name="user_name" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="Full name" value="Emma Smith" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <!--begin::Label-->
                                                    <label class="required fw-semibold fs-6 mb-2">Email</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input type="email" name="user_email" class="form-control form-control-solid mb-3 mb-lg-0" placeholder="example@domain.com" value="smith@kpmg.com" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-5">
                                                    <!--begin::Label-->
                                                    <label class="required fw-semibold fs-6 mb-5">Role</label>
                                                    <!--end::Label-->
                                                    <!--begin::Roles-->
                                                    <!--begin::Input row-->
                                                    <div class="d-flex fv-row">
                                                        <!--begin::Radio-->
                                                        <div class="form-check form-check-custom form-check-solid">
                                                            <!--begin::Input-->
                                                            <input class="form-check-input me-3" name="user_role" type="radio" value="0" id="kt_modal_update_role_option_0" checked='checked' />
                                                            <!--end::Input-->
                                                            <!--begin::Label-->
                                                            <label class="form-check-label" for="kt_modal_update_role_option_0">
                                                                <div class="fw-bold text-gray-800">Administrator</div>
                                                                <div class="text-gray-600">Best for business owners and company administrators</div>
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
                                                            <input class="form-check-input me-3" name="user_role" type="radio" value="1" id="kt_modal_update_role_option_1" />
                                                            <!--end::Input-->
                                                            <!--begin::Label-->
                                                            <label class="form-check-label" for="kt_modal_update_role_option_1">
                                                                <div class="fw-bold text-gray-800">Developer</div>
                                                                <div class="text-gray-600">Best for developers or people primarily using the API</div>
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
                                                            <input class="form-check-input me-3" name="user_role" type="radio" value="2" id="kt_modal_update_role_option_2" />
                                                            <!--end::Input-->
                                                            <!--begin::Label-->
                                                            <label class="form-check-label" for="kt_modal_update_role_option_2">
                                                                <div class="fw-bold text-gray-800">Analyst</div>
                                                                <div class="text-gray-600">Best for people who need full access to analytics data, but don't need to update business settings</div>
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
                                                            <input class="form-check-input me-3" name="user_role" type="radio" value="3" id="kt_modal_update_role_option_3" />
                                                            <!--end::Input-->
                                                            <!--begin::Label-->
                                                            <label class="form-check-label" for="kt_modal_update_role_option_3">
                                                                <div class="fw-bold text-gray-800">Support</div>
                                                                <div class="text-gray-600">Best for employees who regularly refund payments and respond to disputes</div>
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
                                                            <input class="form-check-input me-3" name="user_role" type="radio" value="4" id="kt_modal_update_role_option_4" />
                                                            <!--end::Input-->
                                                            <!--begin::Label-->
                                                            <label class="form-check-label" for="kt_modal_update_role_option_4">
                                                                <div class="fw-bold text-gray-800">Trial</div>
                                                                <div class="text-gray-600">Best for people who need to preview content data, but don't need to make any updates</div>
                                                            </label>
                                                            <!--end::Label-->
                                                        </div>
                                                        <!--end::Radio-->
                                                    </div>
                                                    <!--end::Input row-->
                                                    <!--end::Roles-->
                                                </div>
                                                <!--end::Input group-->
                                            </div>
                                            <!--end::Scroll-->
                                            <!--begin::Actions-->
                                            <div class="text-center pt-10">
                                                <button type="reset" class="btn btn-light me-3" data-kt-users-modal-action="cancel">Discard</button>
                                                <button type="submit" class="btn btn-primary" data-kt-users-modal-action="submit">
                                                    <span class="indicator-label">Submit</span>
                                                    <span class="indicator-progress">Please wait...
                                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                                                </button>
                                            </div>
                                            <!--end::Actions-->
                                        </form>
                                        <!--end::Form-->
                                    </div>
                                    <!--end::Modal body-->
                                </div>
                                <!--end::Modal content-->
                            </div>
                            <!--end::Modal dialog-->
                        </div>
                        <!--end::Modal - Add task-->
                    </div>
                    <!--end::Card toolbar-->
                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body py-4">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_table_users">
                        <thead>
                            <tr class="text-start text-muted fw-bold fs-7 text-uppercase gs-0">
                                <th class="w-10px pe-2">
                                    <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                        <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_table_users .form-check-input" value="1" />
                                    </div>
                                </th>
                                <th class="min-w-125px">User</th>
                                <th class="min-w-125px">Service</th>
                                <th class="min-w-90px">Sex</th>
                                <th class="min-w-100px">Status</th>
                                {{-- <th class="text-end min-w-100px">Actions</th> --}}
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 fw-semibold">
                            @forelse ($sellers as $f)
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="{{ route('view-seller', $f->id) }}">
                                            <div class="symbol-label fs-3 bg-light-danger text-danger">
                                                {{-- {{  $f->name }} --}}
                                                <img width="30" src="data:image/png;base64,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" />
                                            </div>
                                        </a>
                                    </div>

                                    <!--end::Avatar-->
                                    <!--begin::User details-->
                                    <div class="d-flex flex-column">
                                        <a href="{{ route('view-seller', $f->id) }}" class="text-gray-800 text-hover-primary mb-1">{{ $f->name }}</a>
                                        <span>{{ $f->email ?? '' }}</span>
                                        <span> {{ App\Models\User::details($f->global_id) !== null ?  App\Models\User::details($f->global_id)->phone_number : ''}} </span>

                                    </div>
                                    <!--begin::User details-->
                                </td>
                                <td class="uppercase">{{ $f->customer_group ?? '' }}</td>
                            
                                <td>
                                    <div class="badge badge-light-success fw-bold">{{ App\Models\User::details($f->global_id) !== null ?  App\Models\User::details($f->global_id)->sex : ''}}</div>
                                </td>
                                <td>
                                    @switch($f->is_approved)
                                        @case(0)
                                            <div class="badge badge-light-danger text-primary fw-bold">Pending</div>
                                            @break
                                        @case(1)
                                            <div class="badge badge-light-success text-primary fw-bold">Approved</div>
                                            @break
                                        @case(2)
                                            <div class="badge badge-light-danger text-primary fw-bold">Under Review</div>
                                            @break
                                        @default
                                            <div class="badge badge-light-danger text-primary fw-bold">Inactive</div>
                                    @endswitch
                                </td>
                                {{-- <td>{{ $f->created_at->toFormattedDateString() }}</td> --}}
                                <td class="text-end">
                                    <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ route('view-seller', $f->id) }}" class="menu-link px-2">View</a>
                                        </div>
                                        @if ($f->is_approved == 1)
                                        <div class="menu-item px-3">
                                            <a href="{{ route('view-seller', $f->id) }}" class="menu-link px-2 bg-danger text-white">Disapprove</a>
                                        </div>
                                        @else
                                        <div class="menu-item px-3">
                                            <a href="{{ route('view-seller', $f->id) }}" class="menu-link px-2 bg-success text-white">Activate</a>
                                        </div>
                                        @endif
                                        {{-- <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3">Edit</a>
                                        </div> --}}
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        {{-- <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
                                        </div> --}}
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                            @empty
                                
                            @endforelse
                            

                            {{--  
                            <tr>
                                <td>
                                    <div class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                    </div>
                                </td>
                                <td class="d-flex align-items-center">
                                    <!--begin:: Avatar -->
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="../../demo10/dist/apps/user-management/users/view.html">
                                            <div class="symbol-label">
                                                <img src="assets/media/avatars/300-6.jpg" alt="Emma Smith" class="w-100" />
                                            </div>
                                        </a>
                                    </div>
                                    <!--end::Avatar-->
                                    <!--begin::User details-->
                                    <div class="d-flex flex-column">
                                        <a href="../../demo10/dist/apps/user-management/users/view.html" class="text-gray-800 text-hover-primary mb-1">Emma Smith</a>
                                        <span>smith@kpmg.com</span>
                                    </div>
                                    <!--begin::User details-->
                                </td>
                                <td>Administrator</td>
                                <td>
                                    <div class="badge badge-light fw-bold">Yesterday</div>
                                </td>
                                <td></td>
                                <td>10 Nov 2023, 6:43 am</td>
                                <td class="text-end">
                                    <a href="#" class="btn btn-light btn-active-light-primary btn-flex btn-center btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                    <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="../../demo10/dist/apps/user-management/users/view.html" class="menu-link px-3">Edit</a>
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3" data-kt-users-table-filter="delete_row">Delete</a>
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                            </tr>
                              --}}
                        </tbody>
                    </table>
                    <!--end::Table-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
</div>
