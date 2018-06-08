@extends('layouts.back-office.ui-template')
@section('body')
<h2 class="panel-title">Input</h2>
  <hr>
  <div id="button-gradient" class="ui-panel">
    <div class="panel-body">
      <div class="row">
        <div class="col-12">
          <div id="input" class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Defalut Input</h5>
              <br>
              <input type="text" class="form-control" placeholder="form-control">
              <br>
              <pre class="code-panel"><code class="html" data-lang="html"><span class="tag">&lt;input</span> <span class="attr">type=</span><span class="attr-value">"text"</span> <span class="attr">class=</span><span class="attr-value">"form-control<span class="class-hilight"></span>"</span> <span class="attr">placeholder=</span><span class="attr-value">"form placeholder"</span> <span class="tag">/&gt;</span></code></pre>

              <hr>
            </div>
          </div>

          <div id="input" class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Search Input</h5>
              <br>
              <div class="form-search">
                <input type="text" class="form-control" placeholder="Search ...">
              </div>
              <br>
<pre class="code-panel"><code class="html" data-lang="html"><span class="tag">&lt;div</span> <span class="attr">class=</span><span class="attr-value">"<span class="class-hilight">form-search</span>"</span><span class="tag">&gt;</span>
  <span class="tag">&lt;input</span> <span class="attr">type=</span><span class="attr-value">"text"</span> <span class="attr">class=</span><span class="attr-value">"form-control<span class="class-hilight"></span>"</span> <span class="attr">placeholder=</span><span class="attr-value">"form placeholder"</span> <span class="tag">/&gt;</span>
<span class="tag">&lt;/div&gt;</span></code></pre>

              <hr>
            </div>
          </div>

          <div id="input-isvalid" class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Input With Valid</h5>
              <br>
              <input type="text" class="form-control is-valid" placeholder="form-control">
              <br>
              <pre class="code-panel"><code class="html" data-lang="html"><span class="tag">&lt;input</span> <span class="attr">type=</span><span class="attr-value">"text"</span> <span class="attr">class=</span><span class="attr-value">"form-control <span class="class-hilight">is-valid</span>"</span> <span class="attr">placeholder=</span><span class="attr-value">"form placeholder"</span> <span class="tag">/&gt;</span></code></pre>

              <hr>            
            </div>
          </div>

          <div id="input-invalid" class="card">
            <div class="card-body">
              <h5 class="card-title">Input With Invalid</h5>
              <br>
              <div class="form-group">
                <input type="text" class="form-control is-invalid" placeholder="form-control">
                <small class="form-text text-danger">The number field is required.</small>                
              </div>
              <br>
<pre class="code-panel"><code class="html" data-lang="html"><span class="tag">&lt;div</span> <span class="attr">class=</span><span class="attr-value">"form-group"</span><span class="tag">&gt;</span>
  <span class="tag">&lt;input</span> <span class="attr">type=</span><span class="attr-value">"text"</span> <span class="attr">class=</span><span class="attr-value">"form-control <span class="class-hilight">is-invalid</span>"</span> <span class="attr">placeholder=</span><span class="attr-value">"form placeholder"</span> <span class="tag">/&gt;</span>
  <span class="tag">&lt;p</span> <span class="attr">class=</span><span class="attr-value">"form-text <span class="class-hilight">text-danger</span>"</span><span class="tag">&gt;</span>The number field is required.<span class="tag">&lt;/p&gt;</span>
<span class="tag">&lt;/div&gt;</span></code></pre>

            </div>
          </div>
          <br>

          <div id="input" class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Textarea</h5>
              <br>
              <textarea class="form-control" rows="5">Textarea</textarea>
              <br>
              <pre class="code-panel"><code class="html" data-lang="html"><span class="tag">&lt;textarea</span> <span class="attr">class=</span><span class="attr-value">"form-control<span class="class-hilight"></span>"</span><span class="tag">&gt;</span>Textarea<span class="tag">&lt;/textarea&gt;</span></code></pre>

              <hr>
            </div>
          </div>

          <br>
          <div id="input-isvalid" class="card mb-4" style="background-color: #f5f5f5;">
            <div class="card-body">
              <h5 class="card-title">Checkbox</h5>
              <br>
              <div class="checkbox">
                <input type="checkbox" id="checkbox">
                <label for="checkbox"></label>
              </div>

              <div class="checkbox">
                <input type="checkbox" id="checkbox-checked" checked>
                <label for="checkbox-checked"></label>
              </div>
              <br>
              <br>
<pre class="code-panel"><code class="html" data-lang="html"><span class="tag">&lt;div</span> <span class="attr">class=</span><span class="attr-value">"checkbox"</span><span class="tag">&gt;</span>
  <span class="tag">&lt;input</span> <span class="attr">type=</span><span class="attr-value">"checkbox"</span> <span class="attr">id=</span><span class="attr-value">"checkbox"</span> <span class="tag">/&gt;</span>
  <span class="tag">&lt;label</span> <span class="attr">for=</span><span class="attr-value">"checkbox"</span><span class="tag">&gt;</span><span class="tag">&lt;/label&gt;</span>
<span class="tag">&lt;/div&gt;</span>

<span class="tag">&lt;div</span> <span class="attr">class=</span><span class="attr-value">"checkbox"</span><span class="tag">&gt;</span>
  <span class="tag">&lt;input</span> <span class="attr">type=</span><span class="attr-value">"checkbox"</span> <span class="attr">id=</span><span class="attr-value">"checkbox-checked"</span> <span class="class-hilight">checked</span><span class="tag">/&gt;</span>
  <span class="tag">&lt;label</span> <span class="attr">for=</span><span class="attr-value">"checkbox-checked"</span><span class="tag">&gt;</span><span class="tag">&lt;/label&gt;</span>
<span class="tag">&lt;/div&gt;</span>
</code></pre>
              <hr>            
            </div>
          </div>

          <div id="input-isvalid" class="card mb-4">
            <div class="card-body">
              <h5 class="card-title">Search</h5>
              <p class="text-danger">* action นี้ ใช้ Typehead js, ดูตัวอย่างการเขียน function ได้ในไฟล์ js/back-office/script.js</p>
              <br>
              <input type="text" class="form-control" id="BillingAddress" data-action="billingSearch" placeholder="Billing Search">
              <br>
              <br>
              <pre class="code-panel"><code class="html" data-lang="html"><span class="tag">&lt;input</span> <span class="attr">type=</span><span class="attr-value">"text"</span> <span class="attr">class=</span><span class="attr-value">"form-control"</span> <span class="attr">placeholder=</span><span class="attr-value">"Calendar"</span> <span class="class-hilight">data-action="billingSearch"</span> <span class="tag">/&gt;</span></code></pre>
              <hr>            
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection