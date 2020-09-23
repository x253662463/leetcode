package _1TwoSum

func towSum(nums []int, target int) []int {
	left := map[int]int{}

	for id, num := range nums {
		left[target-num] = id
	}

	for id, num := range nums {
		if val, ok := left[num]; ok && id != val {
			return []int{id, val}
		}
	}
	return nil
}
