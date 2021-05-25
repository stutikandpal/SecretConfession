<x-basichead title="Feel" classh="-outline" classf="" classc="-outline" />
<div>
    <main class="px-3">
        <table class="table bg-light">
            <thead>
                <tr>
                    <th scope="col" class="col-3">Name</th>
                    <th scope="col" class="col-9">Confession</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($confessions as $confession)
                    <tr>
                        <td class="col-3">{{$confession->name}}</td>
                        <td class="col-9">{{$confession->msg}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>
</div>

<x-basicfoot/>