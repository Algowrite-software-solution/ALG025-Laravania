<!-- Tab Manage Users -->
<Section>
    <div class="container-fluid gap-3">
        <div class="col-12 d-flex flex-column align-items-center align-items-lg-start">
            <h1 class="lrv-fs-4 lrv-text-dark">Manage Users</h1>
            <nav style="--bs-breadcrumb-divider: '&#x2022;';" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item lrv-text-dark"><a>Admin</a></li>
                    <li class="breadcrumb-item lrv-text-dark">Manage Users</li>
                </ol>
            </nav>
        </div>
        <div class="col-12 d-flex flex-column lrv-shadow-l lrv-bg-primary-100 lrv-rounded p-4 py-4 gap-3">
            <div class="mb-0 pb-0">
                <h4 class="lrv-text-dark lrv-fs-6 mb-0 pb-0">User Table</h4>
                <label class="lrv-fs-8 mt-0 pt-0">Search & view users.</label>
            </div>
            <div class=" d-flex justify-content-between mt-0 pt-0" id="userSearchContainer">
                <div class="lrv-form-floating tab-user-managment-s1-div1">
                    <input data-input-hook="email" type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="searchProductEmail" placeholder="Email">
                    <label for="searchProductEmail">Email</label>
                </div>
                <div class="lrv-form-floating tab-user-managment-s1-div1">
                    <input data-input-hook="name" type="text" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="searchProductName" placeholder="Name">
                    <label for="searchProductName">Name</label>
                </div>
            </div>
            <div class="dark">
                <table class="w-100 tab-user-managment-s1-table1" id="manageUserTable">
                    <thead>
                        <tr class="tab-user-managment-s1-border-bottom">
                            <th data-column="id" class="topc-text-clr-2 text-start p-2 pb-3 tab-user-managment-s1-th1">Id</th>
                            <th data-column="first_name" class="topc-text-clr-2 text-start p-2 pb-3 tab-user-managment-s1-th1">First Name</th>
                            <th data-column="last_name" class="topc-text-clr-2 text-start p-2 pb-3 tab-user-managment-s1-th1">Last Name</th>
                            <th data-column="email" class="topc-text-clr-2 text-start p-2 pb-3 tab-user-managment-s1-th1">Email</th>
                            <th data-column="mobile" class="topc-text-clr-2 text-start p-2 pb-3 tab-user-managment-s1-th1">Mobile</th>
                            {{-- <th data-column="user_type.type" class="topc-text-clr-2 text-start p-2 pb-3 tab-user-managment-s1-th1">User Type</th> --}}
                            <th data-column class="topc-text-clr-2 text-center p-2 pb-3 tab-user-managment-s1-th1">Action</th>
                        </tr>
                    </thead>
                    <tbody id="tabUserListContainer">

                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center d-none p-lg-4" id="tabUsersInputGroup">
            <div class="col-12 p-0 mt-5 d-flex flex-row justify-content-between align-items-center">
                <div>
                  <span class="lrv-fs-7 lrv-text-dark lrv-fw-medium lrv-font-poppins">Details</span>
                  <p class="lrv-fs-8 lrv-text-dark lrv-fw-normal lrv-font-poppins">View & update user details.</p>
                </div>
                <button id="clearUsersInputButton" class="lrv-btn lrv-btn-primary-outline col-md-2 col-4">clear</button>
            </div>

            <div class="col-12 col-md-6 input-div">
                <div class="lrv-form-floating">
                    <input readonly type="text" name="id" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="tabUsersInputId" placeholder="Id">
                    <label for="tabUsersInputId">Id</label>
                </div>
            </div>

            <div class="col-12 col-md-6 input-div">
                <div class="lrv-form-floating">
                    <input readonly type="text" name="email" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="tabOUsersInputUserEmail" placeholder="User Email">
                    <label for="tabOUsersInputUserEmail">User Email</label>
                </div>
            </div>

            <div class="col-12 col-md-6 input-div">
                <div class="lrv-form-floating">
                    <input readonly type="text" name="first_name" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="tabOUsersInputUserFirstName" placeholder="First Name">
                    <label for="tabOUsersInputUserFirstName">First Name</label>
                </div>
            </div>

            <div class="col-12 col-md-6 input-div">
                <div class="lrv-form-floating">
                    <input readonly type="text" name="last_name" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="tabOUsersInputUserLastName" placeholder="Last Name">
                    <label for="tabOUsersInputUserLastName">Last Name</label>
                </div>
            </div>

            <div class="col-12 col-md-6 input-div">
                <div class="lrv-form-floating">
                    <input readonly type="text" name="mobile" class="lrv-form-input lrv-border-0 lrv-border-bottom" id="tabOUsersInputUserMobile" placeholder="Mobile">
                    <label for="tabOUsersInputUserMobile">Mobile</label>
                </div>
            </div>

            <div class="col-12 col-md-6 input-div">
                <div class="lrv-form-floating">
                    <select class="lrv-form-select lrv-border-0 lrv-border-bottom" name="user_type_id" id="tabOUsersInputUserTypeId" aria-label="User Type Id">
                        <option value="" selected>Select</option>
                    </select>
                    <label for="tabOUsersInputUserTypeId">User Type Id</label>
                </div>
            </div>

            <div class="col-12 row justify-content-center align-items-stretch mt-3 mb-3">
                <div class="col-md-6 col-12 mb-md-0">
                    <button type="button" class="lrv-btn lrv-btn-primary w-100" id="updateOrderButton">
                        Update User
                    </button>
                </div>
            </div>

        </div>
    </div>
</Section>