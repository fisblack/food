@extends('layouts.back-office.ui-template')
@section('body')
@php
    $icons = [
        [ 
            'prefix' => 'fas',
            'name' => 'fa-check',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-search',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-times',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-check-square',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-clipboard-list',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-expand',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-copy',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-print',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-edit',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-paperclip',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-expand',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-user-circle',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-angle-down',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-exclamation',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-exclamation-triangle',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-undo',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-file-alt',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-folder',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-trash-alt',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-map-marker',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-history',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-plus-square',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-caret-right',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-caret-left',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-check-circle',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-times-circle',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-chevron-right',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-chevron-left',
        ],
        [ 
            'prefix' => 'fas',
            'name' => 'fa-chevron-down',
        ],
    ];
@endphp
<h2 class="panel-title">ICONS</h2>
<hr>
<div id="button-gradient" class="ui-panel">
    <div class="panel-body">
        {{-- PLEASE DO NOT REINDENT ห้ามจัดโค้ดส่วนนี้ใหม่ค่ะ !!!!!   --}}
        <div class="row">
            @foreach($icons as $index => $icon)
            <div class="col-6">
                <div class="row">
                  <div class="col-2">
                    <i class="{{ $icon['prefix'].' '.$icon['name'] }} font-size-36"></i>
                </div>
                <div class="col-10" style="padding-left: 0px;">
                    <pre class="code-panel"><code class="html"><span class="tag">&lt;i</span> <span class="attr">class=</span><span class="attr-value">"{{ $icon['prefix'] }} <span class="class-hilight">{{ $icon['name'] }}</span>"</span><span class="tag">&gt;</span><span class="tag">&lt;/i&gt;</span></code></pre>
                </div>
            </div>
            <hr>
        </div>
        @endforeach
    </div>
</div>
@endsection