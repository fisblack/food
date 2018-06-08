@extends('layouts.back-office.ui-template')
@section('body')
<h2 class="panel-title">Pagination</h2>

  <hr>
  <div id="button-gradient" class="ui-panel">
    <div class="panel-body">
      <div class="row">
        <div class="col-12">

          <div id="pagination" class="card mb-4">
            <div class="card-body">
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-end">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <span aria-hidden="true">&laquo;</span>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>

              <br>
<pre class="code-panel"><code class="html" data-lang="html"><span class="tag">&lt;nav</span> <span class="attr">aria-label=</span><span class="attr-value">"Page navigation example"</span><span class="tag">&gt;</span>
  <span class="tag">&lt;ul</span> <span class="attr">class=</span><span class="attr-value">"<span class="class-hilight">pagination justify-content-end</span>"</span><span class="tag">&gt;</span>
    <span class="tag">&lt;li</span> <span class="attr">class=</span><span class="attr-value">"page-item <span class="class-hilight">disabled</span>"</span><span class="tag">&gt;</span>
      <span class="tag">&lt;a</span> <span class="attr">class=</span><span class="attr-value">"page-link"</span> <span class="attr">href=</span><span class="attr-value">"#"</span><span class="tag">&gt;</span>
        <span class="tag">&lt;span</span> <span class="attr">aria-hidden=</span><span class="attr-value">"true"</span><span class="tag">&gt;</span><span>&</span>laquo;<span class="tag">&lt;/span&gt;</span>
        <span class="tag">&lt;span</span> <span class="attr">class=</span><span class="attr-value">"sr-only"</span><span class="tag">&gt;</span>Previous<span class="tag">&lt;/span&gt;</span>
      <span class="tag">&lt;/a&gt;</span>
    <span class="tag">&lt;/li&gt;</span>
  @for($i = 1; $i < 4; $i++)
  <span class="tag">&lt;li</span> <span class="attr">class=</span><span class="attr-value">"page-item <span class="class-hilight">{{ $i == 1 ? 'active' : '' }}</span>"</span><span class="tag">&gt;</span>
      <span class="tag">&lt;a</span> <span class="attr">class=</span><span class="attr-value">"page-link"</span> <span class="attr">href=</span><span class="attr-value">"#"</span><span class="tag">&gt;</span>0{{ $i }}<span class="tag">&lt;/a&gt;</span>
    <span class="tag">&lt;/li&gt;</span>
  @endfor
  <span class="tag">&lt;li</span> <span class="attr">class=</span><span class="attr-value">"page-item"</span><span class="tag">&gt;</span>
      <span class="tag">&lt;a</span> <span class="attr">class=</span><span class="attr-value">"page-link"</span> <span class="attr">href=</span><span class="attr-value">"#"</span><span class="tag">&gt;</span>
        <span class="tag">&lt;span</span> <span class="attr">aria-hidden=</span><span class="attr-value">"true"</span><span class="tag">&gt;</span><span>&</span>raquo;<span class="tag">&lt;/span&gt;</span>
        <span class="tag">&lt;span</span> <span class="attr">class=</span><span class="attr-value">"sr-only"</span><span class="tag">&gt;</span>Next<span class="tag">&lt;/span&gt;</span>
      <span class="tag">&lt;/a&gt;</span>
    <span class="tag">&lt;/li&gt;</span>
  <span class="tag">&lt;/ul&gt;</span>
<span class="tag">&lt;/nav&gt;</span></code></pre>

              <hr>            
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
@endsection