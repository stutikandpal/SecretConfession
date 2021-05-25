<x-basichead title="Confess" classh="-outline" classf="-outline" classc=""/>
<div>
<main class="px-3">
    <form action="postconfess" method="POST">
    @csrf    
<div class="mb-3">
  <label for="name" class="form-label">Name(Optional)</label>
  <input type="text" class="form-control" name="name" id="name" placeholder="Name(Optional)">
</div>
<div class="mb-3">
  <label for="msg" class="form-label">Your Confession</label>
  <textarea class="form-control" id="msg" name="msg" rows="3" placeholder="Speak Your Heart Out!!" style="height: 320px;" required></textarea>
</div>

<button type="reset" class="btn btn-outline-danger">Not Yet!!</button>
<button type="submit" class="btn btn-success">Confess!!</button>

        </form>
    </main>
</div>

<x-basicfoot/>