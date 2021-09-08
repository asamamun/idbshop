<tr>
    <td>{{$product->id}}</td>
    <?php $buffer = ''; ?>
@foreach($product->productmetas as $productmeta)
    @if($productmeta->namemeta=='name')
            <?php $buffer .= "<td>".$productmeta->value."</td>"; ?>
    @endif
    @if($productmeta->namemeta=='sku')
        @if($productmeta->value!='')
            <?php $buffer .= "<td>".$productmeta->value."</td>"; ?>
        @else
                <?php $buffer .= "<td></td>"; ?>
         @endif


    @endif

@endforeach
    <?php echo $buffer; ?>
        <td>{{\App\Ecclass\commonFx::timeAgo($product->created_at)}}</td>

        <td>
            <a href="{{url('shop/product/'.$product->id)}}" id="viewProduct" class="btn btn-xs btn-success" target="_blank"><span>View</span></a>
            <a href="#" id="editProduct" class="btn btn-xs btn-warning"><span>Edit</span></a>
            <a href="#" id="delProduct" class="btn btn-xs btn-danger"><span>Delete</span></a>
        </td>
    </tr>

