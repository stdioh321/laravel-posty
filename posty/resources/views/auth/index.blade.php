@extends("layouts.app")

@section("content")
    <div class="flex justify-center">
        <div class="w-1/2 bg-white p-6 rounded-lg">
            Register
        </div>
    </div>
    <script>
        const url = "https://xjsonplaceholder.typicode.com/users";

        fetch(url)
            .then(res => res.json())
            .then(res => {
                console.log(res);
            })
            .catch(err => {
                console.log(err);
            });
        var url = "https://jsonplaceholder.typicode.com/users";
        var data = async () => {
            try {
                const res = await fetch(url);
                const data = await res.json();
                return data;
            } catch (err) {
                console.log(err);
            }
        };
    </script>
@endsection
