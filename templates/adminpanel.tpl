<div class='pagewarning'>
	{$admin_description}
</div>
<div id='source'>
	<pre id='code'></pre>
</div>
<ul id='resources'>
	{foreach from=$items->result item='item' name='pos'}
	<li>
		<h3><a href='{$item->project_url}' target='_blank'>{$item->name}</a></h3>
		<div class='version' title='{$copied}'>
			{$item->version} {$copy_image} <span class='url'>{$item->cdn_url}</span>
		</div>
		{if !empty($item->provider)} <span class='provider'><strong>{$provider}:</strong> {$item->provider}</span>
		{/if}
		{if !empty($item->description)}
		<p>
			{$item->description}
		</p>
		{/if}
		<div class='field switch'>
			<label class='cb-enable'><span>{$on}</span></label>
			<label class='cb-disable selected'><span>{$off}</span></label>
			<input type='checkbox' class='checkbox' name='button{$smarty.foreach.pos.iteration}' />
			<span style='display: none;'>&lt;script src="{$item->cdn_url}"&gt;&lt;script&gt;</span>
			<div class='clearb'></div>
		</div>
	</li>
	{/foreach}
<div class='clearb'></div>
</ul>