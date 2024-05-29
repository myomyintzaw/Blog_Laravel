{{-- <div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
</div> --}}

{{-- -- @props(['value']) -- --}}
{{-- <textarea name="" rows="3" cols="" {!! $attributes->merge([
    'class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm h-10 w-full',
    'id' => 'helo',
]) !!}>
{{ $slot }} --}}
{{-- -- {{$value ?? $slot}} -- --}}
{{-- </textarea> --}}



<textarea name="" {!! $attributes->merge([
    'class' => 'border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm  w-full',
    'id' => 'helo',
    'rows' => '3',
    'cols' => '',
]) !!}>
{{ $slot }}

</textarea>
