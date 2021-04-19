@extends('dashboard.layout.app')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <span class="fr">
                            <a href="" data-toggle="modal" data-target="#add" class="btn btn-primary btn-sm">New Gig +</a>
                        </span>
                    </ol>
                </div>
                <h5 class="page-title">Gig Lists</h5>
            </div>

        </div>
        <!-- end row -->
        <div class="row">
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">View Gig Data</h4>
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spagigg: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Company Name</th>
                                    <th>Job Role </th>
                                    <th>Country</th>
                                    <th>State</th>
                                    <th>Address</th>
                                    <th>Employment Type</th>
                                    <th>Minimum Salary</th>
                                    <th>Maximum Salary</th>
                                    <th>Created At </th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach ($gigs as $gig)
                                <tr>
                                    <td>{{ $gig->id }}</td>
                                    <td>{{$gig->company->name}}</td>
                                    <td>{{ $gig->role }} </td>
                                    <td>{{$gig->country->name}}</td>
                                    <td>{{$gig->state->name}}</td>
                                    <td>{{$gig->address}}</td>
                                    <td>{{$gig->employment_type}}</td>
                                    <td>NGN {{$gig->min_wage}}</td>
                                    <td>NGN {{$gig->max_wage}}</td>
                                    <td>{{date('D , d M Y',strtotime($gig->created_at)) }}</td>
                                    <td class="center">
                                        <a href="" class="btn btn-warning" data-toggle="modal" data-target="#edit-{{$gig->id}}"><i class="fa fa-edit"></i></a>
                                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>


                                <div class="modal fade" id="edit-{{$gig->id}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit Gig  </h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('admin.gigs.update',$gig->id)}}" method="post" enctype="multipart/form-data">@csrf @method('put')
                                                    <div class="form-row">
                                                        <div class="form-group col-md-6">
                                                            <label for="">Role</label>
                                                            <select name="role" id="role" class="form-control"  required>
                                                                <option value="{{ $gig->role }}">{{ $gig->role }}</option>
                                                                <option value="Product Designer">Product Designer</option>
                                                                <option value="Backend Engineer">Backend Engineer</option>
                                                                <option value="Frontend Engineer">Frontend Engineer</option>
                                                                <option value="FullStack Engineer">FullStack Enginer</option>
                                                                <option value="Data Analyst">Data Analyst</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="">Company</label>
                                                            <select name="company_id"  class="form-control" required autofocus>
                                                                <option value="" disabled selected> Select One</option>
                                                                @foreach ($companies as $com)
                                                                    <option value="{{ $com->id }}" {{ $gig->company_id == $com->id ? 'selected' : ''}}>{{ $com->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="">Location</label>
                                                            <select name="country_id" id="country_id" class="form-control"  required>
                                                                <option value="">Select One</option>
                                                                @foreach ($countries as $country)
                                                                    <option value="{{ $country->id }}" aria-url="{{ route('api.general.country.states', $country->id) }}"
                                                                        {{ ($query['country'] ?? '') == $country->id ? 'selected' : '' }}>{{ $country->name }}
                                                                    </option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for=""></label>
                                                            <select name="state_id" id="state_id" class="form-control" required>
                                                                <option value="" disabled selected>State/Region</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label for=""></label>
                                                            <input type="text" class="form-control" id="" value="{{ $gig->address }}" name="address" placeholder="Address">
                                                        </div>

                                                        <div class="form-group col-md-12">
                                                            <label for="">Add Tags</label><br>
                                                            <input type="text" data-role="tagsinput" value="{{ $gig->employment_type }}" class="form-control" name="employment_type">

                                                        </div>
                                                        <div>
                                                            Suggested tags: <u>full-time</u>  <u>Contract</u>  <u>freelance</u>
                                                        </div>
                                                        <br>
                                                        <div class="form-group col-md-6">
                                                            <label for="">Salary</label>
                                                            <input type="number" class="form-control" value="{{ $gig->min_wage }}" id="" name="min_wage" placeholder="Minimum">
                                                        </div>

                                                        <div class="form-group col-md-6">
                                                            <label for="">    </label>
                                                            <input type="number" class="form-control" id="" value="{{ $gig->max_wage }}" name="max_wage" placeholder="Maximum">
                                                        </div>

                                                    </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save</button>
                                            </div>

                                            </form>
                                        </div>
                                    </div>
                                </div>

                                <div class="modal fade" id="delete">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-red">Are your sure you want to delete? This action can`t be revoked!</h5>
                                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <form action="{{route('admin.gigs.destroy',$gig->id)}}" method="post">{{csrf_field()}} {{method_field('DELETE')}}
                                                <button type="submit" class="btn btn-warning">Proceed</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                                {{ $gigs->links() }}
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div><!-- container fluid -->

    <div class="modal fade" tabindex="-1" id="add" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md">
            <div class="modal-content">
                <div class="modal-header">
                    <h4>New Gig</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('admin.gigs.store') }}" method="post">
                    @csrf
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="">Role</label>
                                <select name="role" id="role" class="form-control"  required>
                                    <option value="">Select Job Role</option>
                                    <option value="Product Designer">Product Designer</option>
                                    <option value="Backend Engineer">Backend Engineer</option>
                                    <option value="Frontend Engineer">Frontend Engineer</option>
                                    <option value="FullStack Engineer">FullStack Enginer</option>
                                    <option value="Data Analyst">Data Analyst</option>
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Company</label>
                                <select name="company_id"  class="form-control" required autofocus>
                                    <option value="" disabled selected> Select One</option>
                                    @foreach ($companies as $gig)
                                        <option value="{{ $gig->id }}" {{ old('company_id') == $gig->id ? 'selected' : ''}}>{{ $gig->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">Location</label>
                                <select name="country_id" id="country_id_add" class="form-control"  required>
                                    <option value="">Select One</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}" aria-url="{{ route('api.general.country.states', $country->id) }}"
                                            {{ ($query['country'] ?? '') == $country->id ? 'selected' : '' }}>{{ $country->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group col-md-6">
                                <label for=""></label>
                                <select name="state_id" id="state_id_add" class="form-control" required>
                                    <option value="" disabled selected>State/Region</option>
                                </select>
                            </div>

                            <div class="form-group col-md-12">
                                <label for=""></label>
                                <input type="text" class="form-control" id="" name="address" placeholder="Address">
                            </div>

                            <div class="form-group col-md-12">
                                <label for="">AddTags</label><br>
                                <input type="text" data-role="tagsinput" class="form-control" name="employment_type">

                            </div>
                            <div>
                                Suggested tags: <u>full-time</u>  <u>Contract</u>  <u>freelance</u>
                            </div>
                            <br>
                            <div class="form-group col-md-6">
                                <label for="">Salary</label>
                                <input type="number" class="form-control" id="" name="min_wage" placeholder="Minimum">
                            </div>

                            <div class="form-group col-md-6">
                                <label for="">    </label>
                                <input type="number" class="form-control" id="" name="max_wage" placeholder="Maximum">
                            </div>

                            <div class="form-group col-12 text-center mt-2">
                                <button type="submit" class="btn btn-outline-primary btn-lg">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
