@extends('layouts.app')

@section('title', 'Admin Dashboard')

@section('content')
<div class="container mt-2 pt-2">

    <!-- Top Navigation Bar for Admin Actions -->
    <div class="mb-5">
        <h2 class="fw-bold">Admin Dashboard</h2>
    </div>

    <!-- Admin Actions Bar -->
    <div class="row mb-4">
        <div class="col-md-8 d-flex justify-content-start align-items-center">
            <div class="btn-group" role="group" aria-label="Admin Actions">
                <button type="button" class="btn btn-outline-primary">Manage Users</button>
                <button type="button" class="btn btn-outline-secondary">Manage Jobs</button>
                <button type="button" class="btn btn-outline-secondary">Site Analytics</button>
                <button type="button" class="btn btn-outline-secondary">Settings</button>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Dashboard Cards -->
        <div class="col-md-3">
            <div class="card mb-3 border-start border-4 border-primary">
                <div class="card-body">
                    <h5 class="fw-bold mb-1">Total Users</h5>
                    <p class="fs-4">1,234</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-3 border-start border-4 border-primary">
                <div class="card-body">
                    <h5 class="fw-bold mb-1">Total Jobs</h5>
                    <p class="fs-4">567</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-3 border-start border-4 border-primary">
                <div class="card-body">
                    <h5 class="fw-bold mb-1">New Applications</h5>
                    <p class="fs-4">89</p>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card mb-3 border-start border-4 border-primary">
                <div class="card-body">
                    <h5 class="fw-bold mb-1">Site Traffic</h5>
                    <p class="fs-4">45,678</p>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- User Management -->
        <div class="col-md-6">
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title fw-bold">User Management</h5>
                    <p>Manage and view user information, roles, and activity.</p>
                    <button type="button" class="btn btn-primary">View Users</button>
                    <button type="button" class="btn btn-secondary">Add User</button>
                </div>
            </div>
        </div>

        <!-- Job Management -->
        <div class="col-md-6">
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Job Management</h5>
                    <p>View, edit, and manage job postings.</p>
                    <button type="button" class="btn btn-primary">View Jobs</button>
                    <button type="button" class="btn btn-secondary">Add Job</button>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Site Analytics -->
        <div class="col-md-12">
            <div class="card mb-3 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title fw-bold">Site Analytics</h5>
                    <p>Track site performance, user activity, and more.</p>
                    <button type="button" class="btn btn-primary">View Analytics</button>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
