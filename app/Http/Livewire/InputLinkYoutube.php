<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InputLinkYoutube extends Component
{
    public $link;
    public $youtubeId;
    public $tempResep;

    public function mount($resep)
    {
        if($resep)
        {
            $this->link = $resep->youtube_url;
            $this->tempResep = $resep;
        } 
    }

    public function getYoutubeId()
    {
        $result = preg_match("/^(?:http(?:s)?:\/\/)?(?:www\.)?(?:m\.)?(?:youtu\.be\/|youtube\.com\/(?:(?:watch)?\?(?:.*&)?v(?:i)?=|(?:embed|v|vi|user|shorts)\/))([^\?&\"'>]+)/", $this->link, $matches);
        if($result != 1)
        {
            return null;
        }
        $this->youtubeId = $matches[1];
        return $result;
    }

    public function getYoutubeThumbnail()
    {
        return "https://img.youtube.com/vi/{$this->youtubeId}/sddefault.jpg";
    }

    public function render()
    {
        $youtubeId = $this->getYoutubeId();
        if($youtubeId != null)
        {
            $linkThumbnail = $this->getYoutubeThumbnail();
            return view('livewire.input-link-youtube', ['linkThumbnail' => $linkThumbnail]);
        }
        return view('livewire.input-link-youtube');
    }
}
