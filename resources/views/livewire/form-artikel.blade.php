<div>
    <form wire:submit.prevent="simpan">
        <div class="form-group">
            <label><strong>Title</strong></label>
            <input wire:model="judul" type="text" name="" class="form-control" placeholder="Your article title">
        </div>

        <div class="form-group"><label><strong>Description</strong></label>
            <textarea wire:model="deskripsi" name="" id="" cols="30" rows="10" class="form-control"
                placeholder="Write your article description"></textarea>
        </div>

        <div class="form-group"><button type="submit" class="btn btn-warning"><strong>SUBMIT</strong> your masterpiece</button></div>
    </form>
</div>
