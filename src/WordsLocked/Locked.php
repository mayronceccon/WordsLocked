<?php
namespace WordsLocked;

class Locked
{
	private $words;
	private $listLocked = array();

	public function __construct($listWords = array())
	{
		$words = array();
		if (is_array($listWords)) {
			$words = $listWords;
			if (count($listWords) <= 0) {
				$words = array('carro', 'caminhão', 'veiculo', 'verde', 'branco');
			}
		}
		$this->setWords($words);
	}

	private function getWords()
	{
		return $this->words;
	}

	private function setWords($words)
	{
		$this->words = $words;
	}

	public function test($word = null)
	{
		if (!is_null($word)) {
			$wordsLocked = $this->getWords();
			foreach ($wordsLocked as $lock) {
				if (stristr($word, $lock) !== FALSE) {
					$this->setWordsLocked($lock);
				}
			}
		}
		return $this->getWordsLocked();
	}

	private function setWordsLocked($word)
	{
		$this->listLocked[] = $word;
	}

	public function getWordsLocked()
	{
		return $this->listLocked;
	}
}