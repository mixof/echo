<# if ( data.topics.length > 0 ) { #>
<# _.each( data.topics, function( topic, key, list ) { #>

<div class="fmwp-topic-row<# if ( topic.is_trashed ) { #> fmwp-topic-trashed<# } #><# if ( topic.is_spam ) { #> fmwp-topic-spam<# } #><# if ( topic.is_pending ) { #> fmwp-topic-pending<# } #><# if ( topic.is_reported ) { #> fmwp-topic-reported<# } #><# if ( topic.is_locked ) { #> fmwp-topic-locked<# } #><# if ( topic.is_pinned ) { #> fmwp-topic-pinned<# } #><# if ( topic.is_announcement ) { #> fmwp-topic-announcement<# } #><# if ( topic.is_global ) { #> fmwp-topic-global<# } #><# if ( topic.tags.length > 0 ) { #> fmwp-topic-tagged<# } #>"
    data-topic_id="{{{topic.topic_id}}}"
    data-is_author="<# if ( topic.is_author ) { #>1<# } #>"
    data-reported="<# if ( topic.is_reported_ms ) { #>1<# } #>"
    data-trashed="<# if ( topic.is_trashed ) { #>1<# } #>"
    data-locked="<# if ( topic.is_locked ) { #>1<# } #>"
    data-pinned="<# if ( topic.is_pinned ) { #>1<# } #>">

        <div class="fmwp-topic-avatar fmwp-responsive fmwp-ui-xs">
        <a href="{{{topic.author_url}}}" title="{{{topic.author}}} Profile" data-fmwp_tooltip="{{topic.author_card}}" data-fmwp_tooltip_id="fmwp-user-card-tooltip">
        {{{topic.author_avatar}}}
</a>
</div>

<div class="fmwp-topic-row-lines">
<div class="fmwp-topic-row-line fmwp-topic-primary-data">
<span class="fmwp-topic-title-line">
<a href="{{{topic.permalink}}}">
<span class="fmwp-topic-status-marker fmwp-topic-locked-marker fmwp-tip-n"
title="Locked">
<i class="fas fa-lock"></i>
</span>
<span class="fmwp-topic-status-marker fmwp-topic-pinned-marker fmwp-tip-n"
title="Pinned">
<i class="fas fa-thumbtack"></i>
</span>
<span class="fmwp-topic-status-marker fmwp-topic-announcement-marker fmwp-tip-n"
title="Announcement">
<i class="fas fa-bullhorn"></i>
</span>
<span class="fmwp-topic-status-marker fmwp-topic-global-marker fmwp-tip-n"
title="Global">
<i class="fas fa-globe-americas"></i>
</span>
<span class="fmwp-topic-title">
{{{topic.title}}}
</span>
</a>
</span>
<span class="fmwp-topic-tags-wrapper">
<# if ( topic.tags.length > 0 ) { #>
<# _.each( topic.tags, function( tag, key, list ) { #>
<span class="fmwp-topic-tag"><a href="{{{tag.href}}}">{{{tag.name}}}</a></span>
<# }); #>
<# } #>
</span>

</div>

<div class="fmwp-topic-row-line fmwp-topic-statistics-data">
<div class="fmwp-topic-replies fmwp-responsive fmwp-ui-s fmwp-ui-m fmwp-ui-l fmwp-ui-xl">
<# _.each( topic.people, function( user, key, list ) { #>
<a href="{{{user.url}}}">{{{user.avatar}}}</a>
<# }); #>
</div>

<div class="fmwp-topic-statistics-section">
<div class="fmwp-topic-replies-count" title="{{{topic.respondents_count}}} people have replied">
<span class="fmwp-responsive fmwp-ui-xs">{{{topic.replies}}} replies</span>
<span class="fmwp-responsive fmwp-ui-s fmwp-ui-m fmwp-ui-l fmwp-ui-xl">{{{topic.replies}}}</span>
</div>


<div class="fmwp-topic-likes" title="{{{topic.likes}}} people like this">
<span class="fmwp-responsive fmwp-ui-xs">{{{topic.likes}}} likes</span>
<span class="fmwp-responsive fmwp-ui-s fmwp-ui-m fmwp-ui-l fmwp-ui-xl">{{{topic.likes}}}</span>
</div>


<div class="fmwp-topic-views" title="Views">
<span class="fmwp-responsive fmwp-ui-xs">{{{topic.views}}} views</span>
<span class="fmwp-responsive fmwp-ui-s fmwp-ui-m fmwp-ui-l fmwp-ui-xl">{{{topic.views}}}</span>
</div>

<div class="fmwp-topic-last-upgrade" title="Last Updated">
{{{topic.last_upgrade}}}
</div>
</div>
</div>
</div>

<div class="fmwp-topic-actions">
</div>
</div>		<# }); #>
<# } #>