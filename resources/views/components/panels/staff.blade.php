<!-- Tab Manage Staff -->
<section>
    <div class="container-fluid d-flex flex-column gap-3 p-4">
        <div class="row" style="height: 150px;">
            <div class="col-12 col-md-10 d-flex flex-column align-items-center align-items-lg-start">
                <h1 class="lrv-fs-4 lrv-fw-semibold lrv-font-poppins lrv-text-dark">Manage Staff</h1>
                <nav style="--bs-breadcrumb-divider: '&#x2022;';" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#" class="lrv-text-dark lrv-fw-normal lrv-font-poppins">Admin</a></li>
                        <li class="breadcrumb-item active lrv-text-dark lrv-fw-normal lrv-font-poppins" aria-current="page">Manage Staff</li>
                    </ol>
                </nav>
            </div>
            <div class="col-12 col-md-2">
                <button class="lrv-btn lrv-btn-primary" id="addNewStaffButton">Add New</button>
            </div>
        </div>
        <div class="row vh-100">
            <div class="col-12">
                <div class="d-flex flex-column lrv-rounded p-3 manageStaff-card my-2 my-md-0 my-lg-0 lrv-bg-primary-100 lrv-shadow-l">
                    <h4 class="lrv-text-dark lrv-fs-7 mb-0">Search & Edit</h4>
                    <label class="lrv-fs-8 mt-0">Lorem ipsum dolor sit.</label>
                    <div class="row d-flex flex-row justify-content-between" id="staffSearchContainer">
                        <div class="manageStaff-div col-md-4 col-6 py-2">
                            <div class="lrv-form-floating">
                                <input type="text" name="staff_email" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="staffEmailSearch" placeholder="Email">
                                <label for="email">Email</label>
                            </div>
                        </div>
                        <div class="manageStaff-div col-6 col-md-4 py-2">
                            <div class="lrv-form-floating">
                                <input type="text" name="staff_name" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="staffNameSearch" placeholder="Name">
                                <label for="name">Name</label>
                            </div>
                        </div>
                        <div class="manageStaff-div col-12 col-md-4 py-2">
                            <div class="lrv-form-floating">
                                <select name="staff_role" id="staffroleSearch" class="lrv-form-select lrv-border-0 lrv-border-bottom">
                                    <option value="0">Select</option>
                                </select>
                                <label for="tabstaffrole1">Role</label>
                            </div>
                        </div>
                    </div>
                    <div>
                        <table class="table-width" id="adminStaffTable">
                            <thead>
                                <tr class="manageStaff-border-bottom">
                                    <th data-column="first_name" class="manageStaff-text text-start p-2 pb-3">Name</th>
                                    <th data-column="email" class="manageStaff-text text-start p-2 pb-3">Email</th>
                                    <th data-column="last_login" class="manageStaff-text text-center p-2 pb-3">Last Login</th>
                                    {{-- <th data-column="role_name" class="manageStaff-text text-center p-2 pb-3">Role</th> --}}
                                    {{-- <th class="manageStaff-text text-center p-2 pb-3">Status</th> --}}
                                    {{-- <th class="manageStaff-text text-center p-2 pb-3">Actions</th> --}}
                                </tr>
                            </thead>
                            <tbody id="adminStaffTableContainer">

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!--alert -->
        <div class="toast-container position-fixed bottom-0 end-0 p-1" style="width: fit-content;" id="alertdiv">
        </div>
        <!--alert -->
        <!-- Offcanvas -->
        <div class="offcanvas offcanvas-end lrv-bg-primary-100 lrv-rounded-2" tabindex="-1" id="addStaff" aria-labelledby="addStaff">
            <div class="offcanvas-header pt-2 pb-3 p-0">
                <div class="row w-100 m-0">
                    <div class="col-12 text-start pt-2">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="col-12 text-center">
                        <h1 class="modal-title lrv-fs-5 lrv-fw-medium" id="offcanvasTitle">Add Staff</h1>
                        <span class=" lrv-fs-8 lrv-fw-medium">Add the information about the new staff member</span>
                    </div>
                </div>
            </div>
            <div class="offcanvas-body">
                <div class="row gap-2 pt-3">
                    <div class="d-flex flex-row gap-2">
                        <div class="col">
                            <div class="lrv-form-floating">
                                <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="firstNameInputAddStaff" placeholder="First name">
                                <label for="firstNameInput">First Name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="lrv-form-floating">
                                <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="lastNameInputAddStaff" placeholder="Last name">
                                <label for="lastNameInput">Last Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="lrv-form-floating">
                            <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="emailInputAddStaff" placeholder="Email">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="lrv-form-floating">
                            <input type="password" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="staffAddPasswordInput" placeholder="Password">
                            <label for="staffAddPasswordInput">Password</label>
                        </div>
                    </div>
                    <div class="col-5 pt-3 p-0">
                        <button id="staffAddGeneartePassword" class="lrv-btn lrv-btn-primary m-0">Genetate</button>
                    </div>
                    <div class="col-2 pt-3 p-0 d-flex justify-content-center align-items-center">
                        <input id="staffAddPasswordCopyVerifyCheck" class="check-box lrv-form-check-input" type="checkbox">
                    </div>
                    <div class="col-9 pt-3 p-0">
                        <label for="staffAddPasswordCopyVerifyCheck">I have copied this password in safe palce!</label>
                    </div>
                    <div class="col-12">
                        <div class="lrv-form-floating">
                            <select name="" id="addStaffRoleInput" class="lrv-form-select lrv-border-0 lrv-border-bottom">
                                <option value="0">Select</option>
                            </select>
                            <label for="addStaffRoleInput">Role</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-end row p-4">
                <div class="col-6">
                    <button type="button" class="lrv-btn lrv-btn-secondary lrv-border lrv-border-1 lrv-rounded-pill w-100" id="" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
                </div>
                <div class="col-6">
                    <button onclick="addNewStaffMember()" type="button" class="lrv-btn lrv-btn-primary lrv-border lrv-border-1 lrv-rounded-pill w-100" id="">Add</button>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="tabStaffDeleteModal" tabindex="-1" aria-labelledby="deleteStaff" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content lrv-bg-primary-100">
                    <div class="modal-header border-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex justify-content-center align-items-center">
                        <span class=" lrv-fs-6">Remove <span class=" lrv-fw-semibold" id="staffDeleteModalText">(fname lname)</span> from staff ?</span>
                    </div>
                    <div class="modal-footer border-0 col-12 d-flex justify-content-evenly align-items-center">
                        <button type="button" class="lrv-btn lrv-bg-primary-900 offset-1 col-4" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="lrv-btn lrv-bg-red-500 offset-2 col-4" id="staffDeleteModalDeleteButton">Delete</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Offcanvas -->
        <div class="offcanvas offcanvas-end lrv-bg-primary-100 lrv-rounded-2" tabindex="-1" id="updateStaff" aria-labelledby="updateStaff">
            <div class="offcanvas-header pt-2 pb-3 p-0">
                <div class="row w-100 m-0">
                    <div class="col-12 text-start pt-2">
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="col-12 text-center">
                        <h1 class="modal-title lrv-fs-5 lrv-fw-medium" id="offcanvasTitle2">Update Staff</h1>
                        <span class=" lrv-fs-8 lrv-fw-medium">Update the information about the staff member</span>
                    </div>
                </div>
            </div>
            <div class="offcanvas-body">
                <div class="row gap-2 pt-3">
                    <div class="d-flex flex-row gap-2">
                        <div class="col">
                            <div class="lrv-form-floating">
                                <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="firstNameInputUpdateStaff" placeholder="First name">
                                <label for="firstNameInputUpdateStaff">First Name</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="lrv-form-floating">
                                <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="lastNameInputUpdateStaff" placeholder="Last name">
                                <label for="lastNameInputUpdateStaff">Last Name</label>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="lrv-form-floating">
                            <input type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="emailInputUpdateStaff" placeholder="Email">
                            <label for="emailInputUpdateStaff">Email</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="lrv-form-floating">
                            <input type="password" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="staffUpdatePasswordInput" placeholder="Password">
                            <label for="staffUpdatePasswordInput">Password</label>
                        </div>
                    </div>
                    <div class="col-5 pt-3 p-0">
                        <button class="lrv-btn lrv-btn-primary m-0">Genetate</button>
                    </div>
                    <div class="col-2 pt-3 p-0 d-flex justify-content-center align-items-center">
                        <input id="staffUpdatePasswordCopyVerifyCheck" class="check-box lrv-form-check-input" type="checkbox">
                    </div>
                    <div class="col-9 pt-3 p-0">
                        <label for="staffUpdatePasswordCopyVerifyCheck">I have copied this password in safe palce!</label>
                    </div>
                    <div class="col-12">
                        <div class="lrv-form-floating">
                            <select name="" id="updateStaffRoleInput" class="lrv-form-select lrv-border-0 lrv-border-bottom">
                                <option value="0">Select</option>
                            </select>
                            <label for="updateStaffRoleInput">Role</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="offcanvas-end row p-4">
                <div class="col-6">
                    <button type="button" class="lrv-btn lrv-btn-secondary lrv-border lrv-border-1 lrv-rounded-pill w-100" id="" data-bs-dismiss="offcanvas" aria-label="Close">Cancel</button>
                </div>
                <div class="col-6">
                    <button type="button" class="lrv-btn lrv-btn-primary lrv-border lrv-border-1 lrv-rounded-pill w-100" id="staff-update-button" onclick="updateStaffMember();">Update</button>
                </div>
            </div>
        </div>
    </div>

</section>