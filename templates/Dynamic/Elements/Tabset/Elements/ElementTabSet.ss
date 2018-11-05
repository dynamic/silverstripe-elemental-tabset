<div class="tabset">
    <% if $ShowTitle %>
        <h2 class="tabset-title">$Title</h2>
    <% end_if %>
    <div class="tabset-container" data-listelement-count="$Elements.Elements.Count">
        <% if $Elements %>
            <ul class="nav nav-tabs mb-3" id="pills-tab" role="tablist">
            <% loop $Elements.Elements %>
                <li class="nav-item<% if $First %> active<% end_if %>">
                    <a href="#{$ID}" data-toggle="tab">$Title</a>
                </li>
            <% end_loop %>
            </ul>

            <div class="tab-content clearfix">
                $Elements
            </div>
        <% end_if %>
    </div>
</div>