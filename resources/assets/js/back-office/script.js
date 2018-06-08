$('[data-action="toggle-content"]').click(function(){
    var target = $(this).closest('.item-content').find('.item-content-body');
    var target_action = $(target).attr('area-open');
    if(target_action == 'true'){
        $(target).slideUp(300);
        $(target).attr('area-open', 'false');
    }else{
        $(target).slideDown(300);
        $(target).attr('area-open', 'true');
    }
});

$(document)
    .on('click', '[data-action="remove-image"]', function(){
        swal({
            title: 'Are you sure?',
            text: "You won't be able to remove this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, remove it!'
        }).then((result) => {
            if (result.value) {
                swal(
                    'Removed!',
                    'Your file has been remove.',
                    'success'
                    )
                $(this).closest('.input-image').remove();
            }
        })
    })
    .on('change', '[data-action="input-image"]', function(event){
        var preview = $(this).closest('.input-image').find('img').attr('id');
        var file = event;
        readImage(file)
            .then(function(response){
                var img = document.getElementById(preview);
                    img.src = response;
            })
            .catch(function(error){
                console.log('read file error : ' + error);
            });
    })

$('[data-action="add-image"]').change(function(){
    var input = $(this);
    var panel = $(this).closest('.input-image-group');
    var count_item = $(panel).find('.input-image').length;
    var input_name = 'order-image-';

    readImage(event)
        .then(function(response){
            var item_group = document.createElement('div');
                item_group.className = 'input-image';
                item_group.setAttribute('data-action', 'input-image');
            var input_file = document.createElement('input');
                input_file.id = input_name + count_item;
                input_file.className = 'hidden';
                input_file.setAttribute('type', 'file');
            var image_wrap = document.createElement('div');
                image_wrap.className = 'image';
            var image = document.createElement('img');
                image.id = 'preview-image-' + count_item;
                image.setAttribute('src', response);
            var tools_wrap = document.createElement('div');
                tools_wrap.className = 'tools';
            var button = document.createElement('button');
                button.className = 'btn-tools';
                button.setAttribute('data-action', 'remove-image');
            var button_icon = document.createElement('i');
                button_icon.className = 'fas fa-trash-alt';

            panel.append(item_group);
            item_group.append(input_file);
            item_group.append(image_wrap);
            image_wrap.append(image);
            item_group.append(tools_wrap);
            tools_wrap.append(button);
            button.append(button_icon);
        })
        .catch(function(error){
            console.log('read file error : ' + error);
        });
});

function readImage(file) {
    var input = file.target;
    var reader = new FileReader();
    return new Promise(function(resolve, reject) {
        reader.onload = function() {
            var dataURL =  reader.result;
            resolve(dataURL);
        };
        reader.readAsDataURL(input.files[0]);
   });
}


// ***** Lorem DATA *****
var host = window.location.origin;

var dataBilling = [
{
    name : 'ABC Factory Co., Ltd',
    address: '888/8 Belgium Road, Belgium 88888',
    image: host + '/images/back-office/raindrop-close-up.png'
},
{
    name : 'DEF Factory Co., Ltd',
    address: '888/8 Belgium Road, Belgium 88888',
    image: host + '/images/back-office/raindrop-close-up.png'
},
{
    name : 'HIJ Factory Co., Ltd',
    address: '888/8 Belgium Road, Belgium 88888'
},
{
    name : 'KLM Factory Co., Ltd',
    address: '888/8 Belgium Road, Belgium 88888'
},
{
    name : 'NOP Factory Co., Ltd',
    address: '888/8 Belgium Road, Belgium 88888'
},
{
    name : 'QRST Factory Co., Ltd',
    address: '888/8 Belgium Road, Belgium 88888'
},   
];

var billingSearch = new Bloodhound({
    datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
    queryTokenizer: Bloodhound.tokenizers.whitespace,
    limit: 10,
    local: dataBilling   
});
billingSearch.initialize();



// **** Fetch Data Form API *******
// var billingSearch = new Bloodhound({
//     datumTokenizer: Bloodhound.tokenizers.obj.whitespace('value'),
//     queryTokenizer: Bloodhound.tokenizers.whitespace,
//     remote: {
//         url: '//api.swiftype.com/api/v1/public/engines/search?q=',
//         replace: function(url, query) {
//             return url + query + "&engine_key=VdyvTho_MpwQbhzSC6kD";
//         },
//         transform: function(response) {
//             return response.records.page;
//         },
//         ajax: {
//             type: "POST",
//             data: {
//                 q: function() {
//                     return $('[data-action="billingSearch"]').val()
//                 }
//             }
//         }
//     }
// });

// var loremBarcode = ['8-8888-88888-88-8', '8-8888-999999-88-8', '4-3388-55555-00-9'];

var billingSearchTemplate = function(data) {        
    if (data.image) {
        return  '<div class="search-item">' + 
        '<div class="search-item-image">' +
        '<img src="' + data.image + '"/>' +
        '</div>' +
        '<div class="search-item-body">' +
        '<p class="search-item-title">' + data.name + '</p>' + 
        '<p class="search-item-subtitle">' + data.address + '</p>' +
        '</div>' +
        '</div>';
    }
    else {
        return  '<div class="search-item">' + 
        '<div class="search-item-body">' +
        '<p class="search-item-title">' + data.name + '</p>' + 
        '<p class="search-item-subtitle">' + data.address + '</p>' +
        '</div>' +
        '</div>';
    }
}


$('[data-action="billingSearch"]').typeahead(null, {
    name: 'billing-search',
    hint: true,
    display: 'name',
    limit: 7,
    highlight: true,
    source: billingSearch.ttAdapter(),
    templates: {
      notFound: '<div class="product-search-item"><h4 class="product-search-title">not found</h4></div>',
      suggestion: billingSearchTemplate
  }
});

// END typeahead product