<style>
  :root{
    --slate-100: rgb(241 245 249);
    --slate-200: rgb(226 232 240);
  }

  .external-input{
    background-color: var(--slate-200);
    padding: 12px;
  }

  .external-input-1{
    width: 100%;
    display: flex;
    align-items: flex-end; 
    justify-content: space-between;
    gap: 16px;
    /* height: 100%; */
  }

  .w-full{
    width: 100%;
  }

  .external-input-3{
   }
  .text-nowrap{
    text-wrap: nowrap;
  }
  .font-bold {
    font-weight: 700;
  }
  .hover\:tracking-wide:hover {
    transition: 0.5s;
    letter-spacing: 0.025em;
  }
  .text-md {
    font-size: 17px !important;
  }
  .text-light{
    color: #ffffff;
  }
  .text-sm{
    font-size: 14px !important;
  }
  .external-input-3 p {margin: 0 !important;}
</style>

<div class="col-12 d-100 external-input mb-3">
  <div class="external-input-1">
    <div class="w-full">
       <label for="" class="form-label require"><b>About Page Title:</b></label>
       <input type="text" class="form-control custom-input input-number" placeholder="About Title">
    </div>
    <div class="external-input-3" id="add-about-btn">
       <p class="btn-warning btn-md text-center btn d-100 font-bold text-dark hover:tracking-wide text-nowrap">ADD ONE LINK</p>
    </div>
  </div>

  <table class="table-bordered w-full text-md mt-3" id="about-link-table">
    <thead class="bg-warning text-dark font-bold w-full text-md text-center">
      <tr class="">
        <th class="py-2">Button Title</th>
        <th class="py-2">Button Links</th>
        <th class="py-2">Actions</th>
      </tr>
    </thead>
    <tbody id="about-link-table"> 
    </tbody>
  </table>

  <input type="hidden" name="about-link-title">
  <input type="hidden" name="about-link-href">
</div>

@push('js')
<script>
  $(document).ready(function(){
    let i = 0;
    let ids = [];
    const tableContent = (id) => 
      `<tr id="${id.parent}">
        <td class="p-2"><input class="form-control about-title" name="${id.title}" id="${id.title}" type="text" placeholder="Title"/></td>
        <td class="p-2"><input class="form-control about-link" name="${id.link}" id="${id.link}" type="text" placeholder="https://www.example.com"/></td>
        <td class="p-2 text-center"><p class="btn-danger btn-sm text-center font-bold text-light hover:tracking-wide" delete-about-link="${id.parent}">DELETE</p></td>
      </tr>`;

    $('#add-about-btn p').click(function(e){
       i++;
      const linkClass = {
        id: i,
        parent: "box-" + i,
        title: "title-" + i,
        link: "link-" + i,
      };

      ids.push(linkClass)
      $('#about-link-table').append(tableContent(linkClass))
    }); 

    // Event delegation for dynamically added elements
    $(document).on('change click keyup', '#about-link-table .about-title', function(){
        const val = $(this).val();
        console.log(val);
    });

    $(document).on("click", "[delete-about-link]", function(e){
      const thisDeleteId = $(this).attr("delete-about-link");

      $("#" + thisDeleteId).remove();
      ids = ids.filter(id => id.parent !== thisDeleteId);

      console.log(ids)
    });
  });
</script>
@endpush