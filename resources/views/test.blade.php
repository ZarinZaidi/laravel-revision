@php
    $user = 'sam';
    $fruits = ['apple', 'orange', 'banana', 'grapes'];
@endphp

<script>
    // take variable in php and we print it in js
    var data = @json($user);
    console.log(data);
    var array = @json($fruits);
    console.log(array);
</script>
