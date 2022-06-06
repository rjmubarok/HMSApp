@extends('frontend.layouts.master')
@section('content')

<section>
    <div class="container bootstrap snippets bootdey">
        <div class="panel-body inf-content">
            <div class="row">
                <div class="col-md-4">
                    <img alt="" style="width:600px;" title="" class="img-circle img-thumbnail isTooltip" src="{{ $member->customer_photo }}" data-original-title="Usuario">
                    <ul title="Ratings" class="list-inline ratings text-center">
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-star"></span></a></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <strong>Information Of   {{ $member->customer_name }}</strong><br>
                    <div class="table-responsive">
                    <table class="table table-user-information">
                        <tbody>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-asterisk text-primary"></span>
                                        Name :
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $member->customer_name }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-user  text-primary"></span>
                                        Email:
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $member->email }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-cloud text-primary"></span>
                                        Phone:
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $member->customer_phone }}
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-bookmark text-primary"></span>
                                        City:
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $member->customer_city }}
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-eye-open text-primary"></span>
                                        Address:
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $member->customer_address }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-envelope text-primary"></span>
                                        Post Code:
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $member->customer_postcode }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-envelope text-primary"></span>
                                       Date Of Birth:
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $member->dob }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-calendar text-primary"></span>
                                        Floor No:
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $member->floor->floor_no ??'N\A'}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-calendar text-primary"></span>
                                        Floor Name:
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $member->floor->floor_name ??'N\A'}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-calendar text-primary"></span>
                                        Room No:
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $member->room->room_number ??'N\A'}}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-calendar text-primary"></span>
                                        Room Name:
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $member->room->room_name ??'N\A' }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-calendar text-primary"></span>
                                        Condition:
                                    </strong>
                                </td>
                                <td class="text-primary">
                                    {{ $member->condition }}
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>
                                        <span class="glyphicon glyphicon-calendar text-primary"></span>
                                        Modified
                                    </strong>
                                </td>

                            </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
</section>


@endsection
