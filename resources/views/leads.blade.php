@extends('layout')
@section('content')
<main>
    <div class="container-fluid px-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="mt-4">Leads</h1>
            <div class="d-flex justify-content-end ">
                <a class="btn btn-primary btn-excel ml-2" href="/createLeads">
                    <i class="fa-solid fa-plus ml-2"></i>Create New
                </a>
            </div>
        </div>
        <div class="card mb-4">
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Owner ID</th>
                            <th>Brand</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Instagram</th>
                            <th>Tiktok</th>
                            <th>Other</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>Owner ID</th>
                            <th>Brand</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Instagram</th>
                            <th>Tiktok</th>
                            <th>Other</th>
                            <th>Status</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        {{-- @foreach ($users as $user) --}}
                        
                        <tr>
                            <td></td>
                            <td>*************</td>
                            <td>
                                <div class="d-flex">
                                    <a title="Edit" class="btn btn-dark me-1" title="Edit" href="/user/edit"><i class="bi bi-pencil-square"></i></a>
                                    <form action="">
                                        <button title="Delete" class="btn btn-dark" type="submit"><i class="bi bi-trash"></i></button>
                                    </form>
                                </div>
                            </td>                                                     
                        </tr>
                        {{-- @endforeach  --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection