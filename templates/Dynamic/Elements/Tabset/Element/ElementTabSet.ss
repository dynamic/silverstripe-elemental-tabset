<div class="tabset">
    <% if $ShowTitle %>
        <h2 class="tabset-title">$Title</h2>
    <% end_if %>
    <div class="tabset-container" data-listelement-count="$Elements.Elements.Count">
        <% if $Elements %>
            <ul class="nav nav-tabs" id="myTab" role="tablist">
            <% loop $Elements.Elements %>
                <li class="nav-item">
                    <a class="nav-link <% if $IsFirst %>active<% end_if %>" id="tab-button-{$ID}" data-toggle="tab" href="#tab-{$ID}" role="tab" aria-controls="tab-{$ID}" aria-selected="<% if $IsFirst %>true<% else %>false <% end_if %>"><span>$Title</span></a>
                </li>
            <% end_loop %>
            </ul>

            <div class="tab-content clearfix">

                <% loop $Elements.Elements %>
                    <div class="tab-pane fade<% if $IsFirst %> active show<% end_if %>" id="tab-{$ID}" role="tabpanel" aria-labelledby="tab-button-{$ID}">
                        $Me
                    </div>
                <% end_loop %>

            </div>
        <% end_if %>
    </div>
</div>
