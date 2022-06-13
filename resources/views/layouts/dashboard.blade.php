@extends('layouts.app')
@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <!-- Charts -->
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">ဝန်ထမ်းများ</h5>
                        <div class="pie" style="height: 400px;"></div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">တက်ရောက်မှုစာရင်းများ</h5>
                        <div class="bars" style="height: 400px;"></div>
                    </div>
                </div>
            </div>
        </div>
        {{-- table --}}
        <div class="row">
            <div class="col-md-9">
                <table class="table borderless shadow font-14">
                    <thead>
                      <tr class="table-bg-gradient">
                        <th scope="col" colspan="8">ကြော်ငြာသင်ပုန်း</th>
                        <th scope="col"><a href="">အားလုံးကြည့်ရန်</a></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>ရာထူးတိုးမြှင့်ခြင်းဆိုင်ရာအဆိုပြုတင်ပြလာမှူများပေါ် စိစစ်သဘောတူညီချက်ပြန်ကြားဆောင်ရွက်ခြင်း <br>
                        <a href="">Posted on June 7, 2022</a>
                        </td>
                      </tr>
                      <tr>
                        <td>ရာထူးတိုးမြှင့်ခြင်းဆိုင်ရာအဆိုပြုတင်ပြလာမှူများပေါ် စိစစ်သဘောတူညီချက်ပြန်ကြားဆောင်ရွက်ခြင်း <br>
                        <a href="">Posted on June 7, 2022</a>
                        </td>
                      </tr>
                      <tr>
                        <td>ရာထူးတိုးမြှင့်ခြင်းဆိုင်ရာအဆိုပြုတင်ပြလာမှူများပေါ် စိစစ်သဘောတူညီချက်ပြန်ကြားဆောင်ရွက်ခြင်း <br>
                        <a href="">Posted on June 7, 2022</a>
                        </td>
                      </tr>
                      <tr>
                        <td>ရာထူးတိုးမြှင့်ခြင်းဆိုင်ရာအဆိုပြုတင်ပြလာမှူများပေါ် စိစစ်သဘောတူညီချက်ပြန်ကြားဆောင်ရွက်ခြင်း <br>
                        <a href="">Posted on June 7, 2022</a>
                        </td>
                      </tr>
                      <tr>
                        <td>ရာထူးတိုးမြှင့်ခြင်းဆိုင်ရာအဆိုပြုတင်ပြလာမှူများပေါ် စိစစ်သဘောတူညီချက်ပြန်ကြားဆောင်ရွက်ခြင်း <br>
                        <a href="">Posted on June 7, 2022</a>
                        </td>
                      </tr>
                      <tr>
                        <td>ရာထူးတိုးမြှင့်ခြင်းဆိုင်ရာအဆိုပြုတင်ပြလာမှူများပေါ် စိစစ်သဘောတူညီချက်ပြန်ကြားဆောင်ရွက်ခြင်း <br>
                        <a href="">Posted on June 7, 2022</a>
                        </td>
                      </tr>
                    </tbody>
                </table>
            </div>

            <div class="col-md-3 text-center shadow font-14 bg-white" id="table">
                <div class="mt-5">
                  <p>နိူင်ငံ့ဝန်ထမ်း နည်းဉပဒေများ</p>
                  <a href="" class="btn btn-sm btn-warning text-center">Download</a>
                </div>
                <div class="mt-4">
                    <p>နိူင်ငံ့ဝန်ထမ်း နည်းဉပဒေများ</p>
                    <a href="" class="btn btn-sm btn-warning text-center">Download</a>
                  </div>
                  <div class="mt-4">
                    <p>နိူင်ငံ့ဝန်ထမ်း နည်းဉပဒေများ</p>
                    <a href="" class="btn btn-sm btn-warning text-center">Download</a>
                  </div>
            </div>
        </div>    
    </div>
</div>    
@endsection