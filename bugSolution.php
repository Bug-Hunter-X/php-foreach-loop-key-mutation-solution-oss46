function foo(array &$arr) {
  $keysToRemove = [];
  foreach ($arr as $key => $value) {
    //check if key should be removed
    if(condition_to_remove_key($key, $value)) {
        $keysToRemove[] = $key;
    }
    //Some operations on $value
  }
  foreach ($keysToRemove as $key) {
    unset($arr[$key]);
  }
}

function condition_to_remove_key($key, $value) {
  //logic to check if a key should be removed
  return $value === 'remove';
}