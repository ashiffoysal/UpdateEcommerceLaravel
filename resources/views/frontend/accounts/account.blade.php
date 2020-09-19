
@extends('layouts.websiteapp')
@section('content')

<main class="ps-page--my-account">
        <div class="ps-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="user-information.html">Account</a></li>
                    <li>Notifications</li>
                </ul>
            </div>
        </div>
        <section class="ps-section--account">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">

                        @include('frontend.include.accounts.menu')

                    </div>
                    <div class="col-lg-8">
                        <div class="ps-section__right mt-12">
                            <div class="ps-section--account-setting">
                                <div class="ps-section__header">
                                    <h3>Notitfications</h3>
                                </div>
                                <div class="ps-section__content">
                                    <div class="table-responsive">
                                        <table class="table ps-table ps-table--notification">
                                            <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th>Date</th>
                                                    <th>Tag</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor</td>
                                                    <td>20-1-2020</td>
                                                    <td><span class="badge badge-primary">sale</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur</td>
                                                    <td>21-1-2020</td>
                                                    <td><span class="badge badge-success">new</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td> Et harum quidem rerum</td>
                                                    <td>21-1-2020</td>
                                                    <td><span class="badge badge-success">new</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet</td>
                                                    <td>21-1-2020</td>
                                                    <td><span class="badge badge-primary">sale</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

            @include('frontend.include.newsletter._subcribtion')
    </main>
@endsection