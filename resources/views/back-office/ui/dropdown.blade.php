@extends('layouts.back-office.ui-template')
@section('body')
  <h2 class="panel-title">Dropdown</h2>
  <hr>
  <div class="ui-panel">
    <div class="panel-body">
      <div class="row">
        <div class="col-10">
          <div id="input" class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Defalut Dropdown</h5>
              <br>
              <div class="dropdown">
                <button class="form-control btn-form-control dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Dropdown
                </button>
                <div class="dropdown-menu">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
              <br>
<pre class="code-panel"><code class="html" data-lang="html"><span class="tag">&lt;div</span> <span class="attr">class=</span><span class="attr-value">"<span class="class-hilight">dropdown</span>"</span><span class="tag">&gt;</span>
  <span class="tag">&lt;button</span> <span class="attr">type=</span><span class="attr-value">"button"</span> <span class="attr">class=</span><span class="attr-value">"form-control btn-form-control dropdown-toggle"</span> <span class="attr">data-toggle=</span><span class="attr-value">"dropdown"</span><span class="tag">&gt;</span>
    Button
  <span class="tag">&lt;/button&gt;</span>
  <span class="tag">&lt;div</span> <span class="attr">class=</span><span class="attr-value">"<span class="class-hilight">dropdown-menu</span>"</span><span class="tag">&gt;</span>
  @for($i = 0; $i < 3; $i++)
  <span class="tag">&lt;a</span> <span class="attr">class=</span><span class="attr-value">"<span class="class-hilight">dropdown-item"</span></span><span class="tag">&gt;</span>dropdown-item {{ $i }}<span class="tag">&lt;/a&gt;</span>
  @endfor
<span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;/div&gt;</span></code></pre></code></pre>

              <hr>
            </div>
          </div>
      
        </div>
      </div>
    </div>
  </div>

  <div class="ui-panel">
    <div class="panel-body">
      <div class="row">
        <div class="col-10">
          <div id="input" class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Defalut Dropdown</h5>
              <br>
              <div class="dropdown dropdown-gray">
                <button class="btn btn-info" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-sort-alpha-down mr-2"></i>SORT
                </button>
                <div class="dropdown-menu">
                  <h6 class="dropdown-header">Type</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">News & Event</a>
                  <a class="dropdown-item" href="#">Knowledge</a>
                  <a class="dropdown-item" href="#">Expert</a>
                  <a class="dropdown-item" href="#">All</a>
                </div>
              </div>
              <br>
<pre class="code-panel"><code class="html" data-lang="html"><span class="tag">&lt;div</span> <span class="attr">class=</span><span class="attr-value">"dropdown <span class="class-hilight">dropdown-gray</span>"</span><span class="tag">&gt;</span>
  <span class="tag">&lt;button</span> <span class="attr">type=</span><span class="attr-value">"button"</span> <span class="attr">class=</span><span class="attr-value"><span class="class-hilight">"btn btn-info"</span></span> <span class="attr">data-toggle=</span><span class="attr-value">"dropdown"</span><span class="tag">&gt;</span>
    <span class="tag">&lt;i</span> <span class="attr">class=</span><span class="attr-value">"fas fa-sort-alpha-down mr-2"</span><span class="tag">&gt;</span><span class="tag">&lt;/i&gt;</span>SORT
  <span class="tag">&lt;/button&gt;</span>
  <span class="tag">&lt;div</span> <span class="attr">class=</span><span class="attr-value">"dropdown-menu"</span><span class="tag">&gt;</span>
    <span class="tag">&lt;h6</span> <span class="attr">class=</span><span class="attr-value">"dropdown-header"</span><span class="tag">&gt;</span>Type<span class="tag">&lt;/h6&gt;</span>
    <span class="tag">&lt;div</span> <span class="attr">class=</span><span class="class-hilight">"dropdown-divider"</span><span class="tag">&gt;</span><span class="tag">&lt;/div&gt;</span>
  @for($i = 0; $i < 3; $i++)
  <span class="tag">&lt;a</span> <span class="attr">class=</span><span class="attr-value">"dropdown-item"</span><span class="tag">&gt;</span>dropdown-item {{ $i }}<span class="tag">&lt;/a&gt;</span>
  @endfor
<span class="tag">&lt;/div&gt;</span>
<span class="tag">&lt;/div&gt;</span></code></pre></code></pre>

              <hr>
            </div>
          </div>
      
        </div>
      </div>
    </div>
  </div>
@endsection