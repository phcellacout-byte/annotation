@props([
  'to' => null,          // nome da rota (GET)
  'href' => null,        // url direta (GET)
  'type' => 'button',    // button|submit|reset
  'class' => '',
])

@php
  // Se for submit/reset, NÃO cria <a>. Tem que ser botão puro.
  $isSubmit = in_array($type, ['submit', 'reset'], true);

  $url = null;
  if (!$isSubmit) {
    if ($href) $url = $href;
    elseif ($to) $url = route($to);
  }
@endphp

@if($url)
  <a href="{{ $url }}">
    <button type="button" class="{{ $class }}">{{ $slot }}</button>
  </a>
@else
  <button type="{{ $type }}" class="{{ $class }}">{{ $slot }}</button>
@endif
