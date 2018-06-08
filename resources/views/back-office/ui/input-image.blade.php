@extends('layouts.back-office.ui-template')
@section('body')
    <h2 class="panel-title">Input Image</h2>
    <hr>
    <div class="input-image-group">
        @for($i=0; $i< 18; $i++)
        <div class="input-image">
            <input type="file" id="example-image-{{ $i }}" accept="image/*" data-action="input-image">
            <div class="image">
                <img id="preview-{{ $i }}" src="{{ asset('images/picture.png') }}" alt="">
            </div>
            <div class="tools">
                <button class="btn-tools" data-action="remove-image">
                    <i class="fas fa-trash-alt"></i>
                </button>
            </div>
        </div>
        @endfor
        <div class="input-image add-image" style="order: 19">
            <div class="add-input">
                <input type="file" id="add-image" class="hidden" data-action="add-image" accept="image/*">
                <label class="add-label" for="add-image">
                    <i class="fas fa-plus-square"></i>
                </label>               
            </div>
            <div class="tools">
                <div class="btn-tools">&nbsp;</div> 
            </div>
        </div>
    </div>
    <div class="card bg-dark text-white p-4 mb-5">
        <ui>
            <li class="mb-2">สำหรับ component นี้ ให้ดูที่ไฟล์ views/back-office/input-image</li>
            <li class="mb-2">javaScript ที่เขียน อยู่ที่  assets/js/back-office/script.js</li>
            <li>class <span class="text-danger">input-image-group</span> ใช้เป็น panel ในการครอบ input-image ทั้งหมด</li>
            <li class="mb-2">ใช้ <span class="text-warning">data-action="add-image"</span> สำหรับการเพิ่ม image</li>
            <li class="mb-2">ใช้ <span class="text-warning">data-action="remove-image"</span> สำหรับการลบ image</li>
        </ui>
    </div>
@endsection