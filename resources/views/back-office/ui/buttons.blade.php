@extends('layouts.back-office.ui-template')
@section('body')
<h2 class="panel-title">Buttons</h2>
<hr>

<div class="ui-panel">
    <div class="panel-header">
        <button type="button" class="btn btn-success text-uppercase">
            <i class="fas fa-check mr-2"></i>approve selected
        </button>

        <button type="button" class="btn btn-danger text-uppercase">
            <i class="fas fa-times mr-2"></i>delete selected
        </button>
    </div>
    <br>
    <div class="panel-body">
        <div class="code-panel">
<pre><code class="html" data-lang="html"><span class="tag">&lt;button</span> <span class="attr">type=</span><span class="attr-value">"button"</span> <span class="attr">class=</span><span class="attr-value">"btn btn-success text-uppercase"</span><span class="tag">&gt;</span>
    <span class="tag">&lt;i</span> <span class="attr">class=</span><span class="attr-value">"fas fa-check mr-2"</span><span class="tag">&gt;</span><span class="tag">&lt;/i&gt;</span>approve selected
<span class="tag">&lt;/button&gt;</span></code></pre>

<pre><code class="html" data-lang="html"><span class="tag">&lt;button</span> <span class="attr">type=</span><span class="attr-value">"button"</span> <span class="attr">class=</span><span class="attr-value">"btn btn-danger text-uppercase"</span><span class="tag">&gt;</span>
    <span class="tag">&lt;i</span> <span class="attr">class=</span><span class="attr-value">"fas fa-times mr-2"</span><span class="tag">&gt;</span><span class="tag">&lt;/i&gt;</span>delete selected
<span class="tag">&lt;/button&gt;</span></code></pre>
        </div>
    </div>
</div>
<hr>

<div class="ui-panel">
    <div class="panel-header">
        <button type="button" class="btn btn-sm btn-round btn-warning with-text-shadow text-uppercase">
            <i class="fas fa-edit mr-2"></i>Edit
        </button>
        <button type="button" class="btn btn-sm btn-round btn-danger with-text-shadow text-uppercase">
            <i class="fas fa-times mr-2"></i>Delete
        </button>

        <button type="button" class="btn btn-sm btn-round btn-default with-text-shadow text-uppercase">
            <i class="fas fa-undo mr-2"></i>Undo
        </button>
    </div>
    <br>
    <div class="panel-body">
        <div class="code-panel">
<pre><code class="html" data-lang="html"><span class="tag">&lt;button</span> <span class="attr">type=</span><span class="attr-value">"button"</span> <span class="attr">class=</span><span class="attr-value">"btn <span class="class-hilight">btn-sm</span> btn-round btn-warning <span class="class-hilight">with-text-shadow</span> text-uppercase"</span><span class="tag">&gt;</span>
    <span class="tag">&lt;i</span> <span class="attr">class=</span><span class="attr-value">"fas fa-edit mr-2"</span><span class="tag">&gt;</span><span class="tag">&lt;/i&gt;</span>edit
<span class="tag">&lt;/button&gt;</span></code></pre>

<pre><code class="html" data-lang="html"><span class="tag">&lt;button</span> <span class="attr">type=</span><span class="attr-value">"button"</span> <span class="attr">class=</span><span class="attr-value">"btn <span class="class-hilight">btn-sm</span> btn-round btn-danger <span class="class-hilight">with-text-shadow</span> text-uppercase"</span><span class="tag">&gt;</span>
    <span class="tag">&lt;i</span> <span class="attr">class=</span><span class="attr-value">"fas fa-times mr-2"</span><span class="tag">&gt;</span><span class="tag">&lt;/i&gt;</span>delete
<span class="tag">&lt;/button&gt;</span></code></pre>

<pre><code class="html" data-lang="html"><span class="tag">&lt;button</span> <span class="attr">type=</span><span class="attr-value">"button"</span> <span class="attr">class=</span><span class="attr-value">"btn <span class="class-hilight">btn-sm</span> btn-round btn-default <span class="class-hilight">with-text-shadow</span> text-uppercase"</span><span class="tag">&gt;</span>
    <span class="tag">&lt;i</span> <span class="attr">class=</span><span class="attr-value">"fas fa-undo mr-2"</span><span class="tag">&gt;</span><span class="tag">&lt;/i&gt;</span>Undo
<span class="tag">&lt;/button&gt;</span></code></pre>

        </div>
    </div>
</div>
<hr>

<div class="ui-panel">
    <div class="panel-header">
        <button type="button" class="btn btn-round btn-tools btn-primary with-text-shadow text-uppercase">
            <i class="fas fa-check-circle mr-3"></i>save
        </button>

        <button type="button" class="btn btn-round btn-tools btn-danger with-text-shadow text-uppercase">
            <i class="fas fa-times-circle mr-3"></i>cancle
        </button>
    </div>
    <br>
    <div class="panel-body">
        <div class="code-panel">
<pre><code class="html" data-lang="html"><span class="tag">&lt;button</span> <span class="attr">type=</span><span class="attr-value">"button"</span> <span class="attr">class=</span><span class="attr-value">"btn btn-round <span class="class-hilight"> btn-tools</span> btn-primary <span class="class-hilight">with-text-shadow</span> text-uppercase"</span><span class="tag">&gt;</span>
    <span class="tag">&lt;i</span> <span class="attr">class=</span><span class="attr-value">"fas fa-check-circle mr-3"</span><span class="tag">&gt;</span><span class="tag">&lt;/i&gt;</span>save &  send
<span class="tag">&lt;/button&gt;</span></code></pre>

<pre><code class="html" data-lang="html"><span class="tag">&lt;button</span> <span class="attr">type=</span><span class="attr-value">"button"</span> <span class="attr">class=</span><span class="attr-value">"btn btn-round <span class="class-hilight"> btn-tools</span> btn-danger <span class="class-hilight">with-text-shadow</span> text-uppercase"</span><span class="tag">&gt;</span>
    <span class="tag">&lt;i</span> <span class="attr">class=</span><span class="attr-value">"fas fa-times-circle mr-3"</span><span class="tag">&gt;</span><span class="tag">&lt;/i&gt;</span>cancle
<span class="tag">&lt;/button&gt;</span></code></pre>
        </div>
    </div>
</div>
<hr>

@endsection