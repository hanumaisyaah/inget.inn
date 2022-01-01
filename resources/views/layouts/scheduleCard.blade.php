<div class="card mb-3">                    
    <div class="card-body">
        <h6 class="card-text d-inline">{{ $schedule->start }} - {{ $schedule->end }}</h6>
        <div class="dropdown d-inline float-right">
            <button class="btn btn-primary" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="height:30px">
            &sdot;&sdot;&sdot;
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ route('schedule.edit', $schedule->id) }}">Edit</a>                                
                <a class="dropdown-item" href="" data-toggle="modal" data-target="#deleteConfirmation{{ $schedule->id }}">Delete</a>
            </div>
        </div>
        <h4 class="card-title mt-4 text-center">{{ $schedule->course }}</h4>
        @if($schedule->location != NULL)
            <p class="card-text">{{ $schedule->room }}<br>
            @if(str_contains($schedule->location, 'www.') OR str_contains($schedule->location, 'http'))
                <a href="{{ $schedule->location }}">({{ $schedule->location }})</a>
            @else
                ({{ $schedule->location }})<br>
            @endif
        @else
            <p class="card-text text-center">{{ $schedule->room }}</p>
        @endif
        @if($schedule->teacher && $schedule->contact != NULL)    
            <p>{{ $schedule->teacher }}: {{ $schedule->contact }}</p>
        @endif        
    </div>
</div>                                            
    
<!-- Delete Confirmation Modal -->
<div class="modal fade" id="deleteConfirmation{{ $schedule->id }}" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="deleteConfirmationLabel">Delete Schedule</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Are you sure to delete this schedule?
        </div>
        <div class="modal-footer">                        
            <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancel</button>
            <form action="{{ route('schedule.destroy', $schedule->id) }}" method="POST">
                @csrf
                @method('DELETE')                            
                <a href="{{ route('schedule.destroy', $schedule->id) }}"><button type="submit" class="btn btn-danger">Delete</button></a>
            </form>                          
        </div>
        </div>
    </div>
</div>
<!-- End of Delete Confirmation Modal -->