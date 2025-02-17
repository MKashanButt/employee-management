@push('css')
    <link rel="stylesheet" href="{{ asset('css/profile.css') }}">
@endpush

@extends('template')
@section('content')
    <x-breadcrumbs :page="'Profile'" />
    <section class="profile">
        <div class="docs">
            <h1>Upload Docs</h1>
            <form action="" method="POST">
                <div class="item" enctype="multipart/form-data">
                    <label for="cnic">CNIC</label>
                    <input type="file" name="cnic" id="cnic">
                </div>
                <div class="item">
                    <label for="educational_docs">Educational Docs</label>
                    <input type="file" name="educational_docs" id="educational_docs" multiple>
                </div>
                <div class="item">
                    <label for="experience_letter">Experience Letter</label>
                    <input type="file" name="experience_letter" id="experience_letter">
                </div>
                <div class="item">
                    <label for="previous_company_salary_slip">Previous Company Salary Slip</label>
                    <input type="file" name="previous_company_salary_slip" id="previous_company_salary_slip">
                </div>
                <button>Upload</button>
            </form>
        </div>
        <div class="stage">
            <div class="header">
                <h1>Profile</h1>
            </div>
            <div class="main-info">
                <img src="https://placehold.co/250" alt="employee-profile">
                <div class="info">
                    <h1>{{ ucwords(Auth::user()->name) }} <span>#SQ-145</span></h1>
                    <p><span>Designation:</span>{{ ucwords(Auth::user()->designation) }}</p>
                    <p><span>DOB:</span> 14/Aug/2000</p>
                    <p><span>Date of Joining:</span> 14/Aug/2000</p>
                    <p><span>Department:</span> DME</p>
                    <button>Download ID Card</button>
                </div>
            </div>
            <div class="header">
                <h1>Summary</h1>
            </div>
            <div class="warnings">
                <h2>Warnings</h2>
                <div class="item">
                    <button class="danger">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, totam?</button>
                    <button class="danger">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, totam?</button>
                    <button class="danger">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime, totam?</button>
                </div>
                <div class="total">
                    <p>Total <span>3</span></p>
                </div>
            </div>
            <div class="increments">
                <h2>Increments</h2>
                <div class="item">
                    <button class="success">PKR/10,000 - JAN 2024</button>
                    <button class="success">PKR/20,000 - JUN 2024</button>
                    <button class="success">PKR/40,000 - DEC 2024</button>
                </div>
                <div class="total">
                    <p>Total <span>PKR/80,000</span></p>
                </div>
            </div>
        </div>
    </section>
@endsection
