@extends('layouts.back-office.ui-template')
@section('body')
<h2 class="panel-title">Select</h2>
  <hr>
  <div id="button-gradient" class="ui-panel">
    <div class="panel-body">
      <div class="row">
        <div class="col-10">
          <div id="default-select" class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Defalut Select</h5>
              <br>
              <div class="select-group">
                <select name="example-select" id="example-select" class="form-control">
                  @for($i=0; $i<3; $i++)
                  <option value="option-{{ $i }}">option {{ $i }}</option>
                  @endfor
                </select>
              </div>
              <br>
<pre class="code-panel"><code class="html" data-lang="html"><span class="tag">&lt;div</span> <span class="attr">class=</span><span class="attr-value"><span class="class-hilight">"select-group"</span></span><span class="tag">&gt;</span>
  <span class="tag">&lt;select</span> <span class="attr">class=</span><span class="attr-value">"form-control"</span> <span class="attr">id=</span><span class="attr-value">"example-select"</span> <span class="tag">&gt;</span>
  @for($i = 0; $i < 3; $i++)
  <span class="tag">&lt;option</span> <span class="attr">value=</span><span class="attr-value">"option-{{ $i }}"</span><span class="tag">&gt;</span>option {{ $i }}<span class="tag">&lt;/option&gt;</span>
  @endfor
<span class="tag">&lt;/select&gt;</span>
<span class="tag">&lt;/div&gt;</span></code></pre></code></pre>

              <hr>
            </div>
          </div>{{-- end group --}}
      
        </div>
      </div>
    </div>
  </div>
@endsection
