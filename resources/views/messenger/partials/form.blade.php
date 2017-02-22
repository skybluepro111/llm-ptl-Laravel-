<div class="bottom bg-white w-full wrapper b-t b-light b-dk b-2x m-t-lg" style="z-index: 10">
    <div class="media">
        <form action="{{route('messenger.sendPost')}}" method="post">
            <div class="media-body">
                <div class="form-group m-b-none b b-light b-dk wrapper-xs bg-white niceScroll"
                     style="min-height:60px; max-height:150px; overflow-y: auto !important;">
                                <textarea style="min-height:60px; resize: none;"
                                          class="form-control autoglow wrapper-none b-none" name="message"
                                          placeholder="Write your message" rows="1"></textarea>
                </div>
                <div class="form-group">
                    <input type="hidden" name="_conversation_id" value="{{$id}}">
                    {{csrf_field()}}
                    <input type="submit" name="submit" value="Send" class="btn btn-info m-t-md pull-right">
                </div>

            </div>
        </form>
    </div>
</div>
