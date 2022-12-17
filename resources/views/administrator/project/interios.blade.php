@extends('layout.administrator.index')


@section('content')
<section>
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-end">
                <button class="btn btn-success btn-lg">
                    <span class="btn-label">
                        <i class="nc-icon nc-simple-add"></i>
                    </span>
                    Tambah Data
                </button>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Master Data Interios</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <th class="text-center">
                                    #
                                    </th>
                                    <th>
                                    Author
                                    </th>
                                    <th>
                                    Name Project
                                    </th>
                                    <th class="text-center">
                                    Type Project
                                    </th>
                                    <th class="text-right">
                                    Date Create
                                    </th>
                                    <th class="text-right">
                                    Actions
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center">
                                            1
                                        </td>
                                        <td>
                                            Andrew Mike
                                        </td>
                                        <td>
                                            Develop
                                        </td>
                                        <td class="text-center">
                                            Interios
                                        </td>
                                        <td class="text-right">
                                            2013
                                        </td>
                                        <td class="text-right">
                                            <button type="button" rel="tooltip" class="btn btn-warning nc-icon nc-settings btn-sm ">
                                            <i class="fa fa-edit"></i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger nc-icon nc-simple-remove btn-sm ">
                                            </button>
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
</section>
@endsection