<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>
<form :action="action" method="post">
  <!-- @{{ csrf_field()}} -->
  <!-- @{{method_field('get')}} -->
  <div class="form-group">
    <label>名前</label>
    <input type="text" class="form-control col-md-5" placeholder="検索したい駅名を入力してください" name="station">
  </div>
  <button type="submit" class="btn btn-primary col-md-5">検索</button>
</form>
                    <div class="card-body">
                        I'm an example component.
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>



<script>
    export default {
        props: {
             action: {
        type: String,
             },
            mounted() {
                console.log('Component mounted.')
            }
        }
    }
    
</script>


