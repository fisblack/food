@extends('layouts.back-office.ui-template')
@section('body')
    <h2 class="panel-title">Tab</h2>
    <hr>
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
        </li>
    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <p>HOME</p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ullam dicta aut doloremque, perspiciatis quisquam dignissimos, accusantium tempora quis necessitatibus ipsam voluptatibus qui aspernatur corporis incidunt, temporibus laborum laboriosam accusamus consequatur.
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <p>Profile</p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi ad rem officia et aliquid dicta velit laborum ipsa labore facere blanditiis modi quisquam quia natus ipsam deleniti, voluptates qui nemo.
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <p>Contact</p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa perferendis quasi animi dolorem praesentium illum, quam corporis rem blanditiis voluptatem suscipit assumenda laboriosam perspiciatis rerum odit! Quaerat unde impedit ab.
        </div>
    </div>
    <br>
    <figure class="code-panel text-white"><pre><code class="html text-white" data-lang="html"><span class="nt">&lt;ul</span> <span class="na">class=</span><span class="s">"nav nav-tabs"</span> <span class="na">id=</span><span class="s">"myTab"</span> <span class="na">role=</span><span class="s">"tablist"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link active"</span> <span class="na">id=</span><span class="s">"home-tab"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#home"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">aria-controls=</span><span class="s">"home"</span> <span class="na">aria-selected=</span><span class="s">"true"</span><span class="nt">&gt;</span>Home<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">id=</span><span class="s">"profile-tab"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#profile"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">aria-controls=</span><span class="s">"profile"</span> <span class="na">aria-selected=</span><span class="s">"false"</span><span class="nt">&gt;</span>Profile<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
  <span class="nt">&lt;li</span> <span class="na">class=</span><span class="s">"nav-item"</span><span class="nt">&gt;</span>
    <span class="nt">&lt;a</span> <span class="na">class=</span><span class="s">"nav-link"</span> <span class="na">id=</span><span class="s">"contact-tab"</span> <span class="na">data-toggle=</span><span class="s">"tab"</span> <span class="na">href=</span><span class="s">"#contact"</span> <span class="na">role=</span><span class="s">"tab"</span> <span class="na">aria-controls=</span><span class="s">"contact"</span> <span class="na">aria-selected=</span><span class="s">"false"</span><span class="nt">&gt;</span>Contact<span class="nt">&lt;/a&gt;</span>
  <span class="nt">&lt;/li&gt;</span>
<span class="nt">&lt;/ul&gt;</span>
<span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-content"</span> <span class="na">id=</span><span class="s">"myTabContent"</span><span class="nt">&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane fade show active"</span> <span class="na">id=</span><span class="s">"home"</span> <span class="na">role=</span><span class="s">"tabpanel"</span> <span class="na">aria-labelledby=</span><span class="s">"home-tab"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane fade"</span> <span class="na">id=</span><span class="s">"profile"</span> <span class="na">role=</span><span class="s">"tabpanel"</span> <span class="na">aria-labelledby=</span><span class="s">"profile-tab"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
  <span class="nt">&lt;div</span> <span class="na">class=</span><span class="s">"tab-pane fade"</span> <span class="na">id=</span><span class="s">"contact"</span> <span class="na">role=</span><span class="s">"tabpanel"</span> <span class="na">aria-labelledby=</span><span class="s">"contact-tab"</span><span class="nt">&gt;</span>...<span class="nt">&lt;/div&gt;</span>
<span class="nt">&lt;/div&gt;</span></code></pre></figure>
@endsection
