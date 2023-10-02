fetch('{{ route("save.clients") }}', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': '{{ csrf_token() }}'
    },
    body: JSON.stringify(data)
})
.then(response => response.json())
.then(data => {
    console.log(data); // Muestra la respuesta JSON en la consola
})
.catch(error => {
    console.error('Error:', error);
});