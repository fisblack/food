@php
  $menus = [
    [
      'path' => '',
      'label' => 'Buttons',
    ],
    [
      'path' => '/icon',
      'label' => 'Icon Font',
    ],
    [
      'path' => '/input',
      'label' => 'Input',
    ],
    [
      'path' => '/select',
      'label' => 'Select',
    ],
    [
      'path' => '/dropdown',
      'label' => 'Dropdown',
    ],
    [
      'path' => '/pagination',
      'label' => 'Pagination',
    ],
    [
      'path' => '/tab',
      'label' => 'Tab',
    ],
    [
      'path' => '/image',
      'label' => 'Input image',
    ],
  ];
@endphp

<div class="list-group">
  @foreach($menus as $menu)
  <a href="{{ url('back-office/ui').$menu['path'] }}" class="list-group-item list-group-item-action
    {{ Request::path() == 'back-office/ui'.$menu['path'] ? 'active' : null }}">
    {{ $menu['label'] }}
  </a>
  @endforeach
</div>