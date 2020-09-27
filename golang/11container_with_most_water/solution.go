package solution

//时间复杂度O(n2)
func maxArea(height []int) int {
	result := 0
	for i := 0; i < len(height); i++ {
		for j := i + 1; j < len(height); j++ {
			var min int
			if height[i] > height[j] {
				min = height[j]
			} else {
				min = height[i]
			}
			area := (j - i) * min
			if area > result {
				result = area
			}
		}
	}
	return result
}

//时间复杂度O(n)
func maxAreaOn(height []int) int {
	return 0
}
