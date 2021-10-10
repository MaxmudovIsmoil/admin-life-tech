@extends('layouts.app')

@section('content')

        <div class="card report">
            <div class="card-body" style="position: relative;">
                <form method="post" action="{{ route('expense.reportShow') }}" class="form-group">
                    @csrf
                    <div class="row">
                        <div class="col-md-4">
                            <label for="startDate">Boshlangich sana</label>
                            <input type="date" name="from_date" id="from_date" class="form-control">
                            @error('from_date')
                                <div class="text-danger">Boshlang'ish sanani kiriting!</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <label for="startEnd">Tugash sana</label>
                            <input type="date" class="form-control" name="to_date" id="to_date">
                            @error('to_date')
                                <div class="text-danger">Tugash sanani kiriting!</div>
                            @enderror
                        </div>
                        <div class="col-md-4">
                            <input type="submit" value="Saqlash" class="btn btn-success" name="showBtn"  style="margin-top: 28px;">
                        </div>
                    </div>
                </form>

                @isset($response)
                <div class="Tolash-kerak mt-3">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                        <tr class="text-center">
                            <th>To'lash kerak</th>
                            <th>Tolaganlar soni</th>
                            <th>Jami summa</th>
                            <th>To'langan</th>
                            <th>Qarzdorlik</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td>55</td>
                                <td>41</td>
                                <td>18 760 000</td>
                                <td>12 710 000</td>
                                <td>6 050 000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="student-count mt-3">
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                        <tr class="text-center">
                            <th width="21%">Barcha o'quvchilar</th>
                            <th width="24%">Guruhda</th>
                            <th width="20.5%">Yakka tartibda</th>
                            <th width="34.5%">Jami</th>
                        </tr>
                        </thead>
                        <tbody>
                            <tr class="text-center">
                                <td class="text-left">Erkaklar</td>
                                <td>51</td>
                                <td>2</td>
                                <td>53</td>
                            </tr>
                            <tr class="text-center">
                                <td class="text-left">Ayollar</td>
                                <td>1</td>
                                <td>1</td>
                                <td>2</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                {{-- Yo'nalishlar --}}
                @include('report.yonalishlar')

                {{-- Mutaxasis statistikasi --}}
                @include('report.mutaxasis')


                {{-- <td>{{ number_format(40*(4700), 0,", "," ") }}</td> --}}

                {{-- Oyliklar --}}
                @include('report.oylik')


                @include('report.chiqim')

                <div class="natija">
                    <h6>Natija</h6>
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                        <tr>
                            <th>Jami tushim</th>
                            <th>Jami chiqim</th>
                            <th>Natija</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr style="background: #23197cb8;color: white">
                            <th>5400 000</th>
                            <th>2835 000</th>
                            <th>2565 000</th>
                        </tr>
                        </tbody>
                    </table>
                </div>

                @endisset
            </div>

        </div>

@endsection
