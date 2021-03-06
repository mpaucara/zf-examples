<?php
/**
 * This file is part of Kartaca Sample ZF Blog.
 *
 * Kartaca Sample ZF Blog is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * Kartaca Sample ZF Blog is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * You should have received a copy of the GNU General Public License
 * along with Kartaca Sample ZF Blog.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @category   Kartaca
 * @package    Kartaca_Blog_Model
 * @copyright  Copyright (c) 2010 Kartaca (http://www.kartaca.com)
 * @license    http://www.gnu.org/licenses/ GPL
 * @author     roysimkes
 */
class Comment extends Kartaca_Model
{
    public function loadFromForm(Zend_Form $form)
    {
        $this->commentator = $form->getCommentator();
        $this->body = $form->getBody();
        $this->email = $form->getEmail();
        $this->post_id = $form->getPostId();
        $this->title = $form->getTitle();
    }

    public function getStatus()
    {
        if ($this->deleted_at !== null) {
            return "Deleted";
        }
        if ($this->approved_at !== null) {
            return "Approved";
        }
        return "Pending";
    }
}