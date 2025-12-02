@extends('layout.main')

@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">

        {{-- Header Card --}}
        <div class="card mb-4">
            <div class="card-body d-flex justify-content-between">
                <div>
                    <h4 class="text-primary">Congratulations John! 🎉</h4>
                    <p>You have done 72% more sales today.</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">View Badges</a>
                </div>
                <img src="/assets/img/illustrations/man-with-laptop.png" height="150" />
            </div>
        </div>
        <div class="content-wrapper">
            <!-- Content -->
            <div class="container-xxl flex-grow-1 container-p-y">
                <!-- Basic Bootstrap Table -->
                <div class="card">
                    <h5 class="card-header">Table Basic</h5>
                    <div class="table-responsive text-nowrap">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Project</th>
                                    <th>Client</th>
                                    <th>Users</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody class="table-border-bottom-0">
                                <tr>
                                    <td>
                                        <i class="icon-base bx bxl-angular icon-md text-danger me-4"></i> <span>Angular
                                            Project</span>
                                    </td>
                                    <td>Albert Cook</td>
                                    <td>
                                        <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                <img src="../assets/img/avatars/2.png" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                                <img src="../assets/img/avatars/3.png" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                class="avatar avatar-xs pull-up" title="Christina Parker">
                                                <img src="../assets/img/avatars/4.png" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                        </ul>
                                    </td>
                                    <td><span class="badge bg-label-primary me-1">Active</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="icon-base bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="icon-base bx bx-edit-alt me-1"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="icon-base bx bx-trash me-1"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="icon-base bx bxl-react icon-md text-info me-4"></i> <span>React
                                            Project</span>
                                    </td>
                                    <td>Barry Hunter</td>
                                    <td>
                                        <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                <img src="../assets/img/avatars/2.png" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                class="avatar avatar-xs pull-up" title="Sophia Wilkerson">
                                                <img src="../assets/img/avatars/3.png" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                class="avatar avatar-xs pull-up" title="Christina Parker">
                                                <img src="../assets/img/avatars/4.png" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                        </ul>
                                    </td>
                                    <td><span class="badge bg-label-success me-1">Completed</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="icon-base bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="icon-base bx bx-edit-alt me-2"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="icon-base bx bx-trash me-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="icon-base bx bxl-vuejs icon-md text-success me-4"></i> <span>VueJs
                                            Project</span>
                                    </td>
                                    <td>Trevor Baker</td>
                                    <td>
                                        <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom" data-bs-placement="top"
                                                class="avatar avatar-xs pull-up" title="Lilian Fuller">
                                                <img src="../assets/img/avatars/2.png" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                title="Sophia Wilkerson">
                                                <img src="../assets/img/avatars/3.png" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                title="Christina Parker">
                                                <img src="../assets/img/avatars/4.png" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                        </ul>
                                    </td>
                                    <td><span class="badge bg-label-info me-1">Scheduled</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="icon-base bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="icon-base bx bx-edit-alt me-2"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="icon-base bx bx-trash me-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="icon-base bx bxl-bootstrap icon-md text-primary me-4"></i>
                                        <span>Bootstrap Project</span>
                                    </td>
                                    <td>Jerry Milton</td>
                                    <td>
                                        <ul class="list-unstyled m-0 avatar-group d-flex align-items-center">
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                title="Lilian Fuller">
                                                <img src="../assets/img/avatars/2.png" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                title="Sophia Wilkerson">
                                                <img src="../assets/img/avatars/3.png" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                            <li data-bs-toggle="tooltip" data-popup="tooltip-custom"
                                                data-bs-placement="top" class="avatar avatar-xs pull-up"
                                                title="Christina Parker">
                                                <img src="../assets/img/avatars/4.png" alt="Avatar"
                                                    class="rounded-circle" />
                                            </li>
                                        </ul>
                                    </td>
                                    <td><span class="badge bg-label-warning me-1">Pending</span></td>
                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="icon-base bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="icon-base bx bx-edit-alt me-2"></i> Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);"><i
                                                        class="icon-base bx bx-trash me-2"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- Tambahkan bagian dashboard lainnya --}}
            </div>
        @endsection
