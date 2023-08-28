<div class="card-counter poll">
    <i class="stat-icon bg-success text-white fa fa-poll"></i>
    <span class="stat-number">Poll Results</span>
    <span class="stat-text">Poll: {{$pollId}}</span>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Menu Item</th>
                <th scope="col">Votes</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($results as $result)
                <tr>
                    <td>{{$result['menuItem']->getBuyableName()}}</td>
                    <td>{{$result['voteCount']}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
